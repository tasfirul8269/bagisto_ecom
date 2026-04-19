<?php

namespace Webkul\Admin\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Product\Repositories\ProductImageRepository;
use Webkul\Product\Repositories\ProductInventoryRepository;
use Webkul\Product\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductRepository $productRepository,
        protected ProductInventoryRepository $productInventoryRepository,
        protected ProductImageRepository $productImageRepository,
        protected AttributeRepository $attributeRepository
    ) {}

    /**
     * Get products.
     */
    public function index(Request $request): JsonResponse
    {
        $query = $this->productRepository->getModel()->newQuery()->with(['images', 'product_flats', 'inventories']);

        if ($request->has('status')) {
            $query->where('status', $request->get('status'));
        }

        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('sku', 'LIKE', "%{$search}%")
                    ->orWhereHas('attribute_values', function ($q2) use ($search) {
                        $q2->where('text_value', 'LIKE', "%{$search}%");
                    });
            });
        }

        $perPage = (int) $request->get('per_page', $request->get('limit', 15));
        $items = $query->latest()->paginate($perPage);

        $mapped = $items->getCollection()->map(function ($product) {
            $flat = $product->product_flats->where('locale', app()->getLocale())->first()
                ?? $product->product_flats->first();

            return [
                'id' => $product->id,
                'sku' => $product->sku,
                'type' => $product->type,
                'status' => $product->status,
                'name' => $flat?->name ?? $product->sku,
                'price' => $flat?->price ?? null,
                'images' => $product->images->map(function ($img) {
                    return [
                        'id' => $img->id,
                        'url' => $img->url,
                        'path' => $img->path,
                        'position' => $img->position,
                    ];
                })->toArray(),
                'quantity' => $product->inventories->sum('qty'),
                'stock_status' => $product->inventories->sum('qty') > 0 ? 'in_stock' : 'out_of_stock',
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
            ];
        });

        return response()->json([
            'data' => $mapped,
            'meta' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
            ],
        ]);
    }

    /**
     * Get product details.
     */
    public function show(int $id): JsonResponse
    {
        $product = $this->productRepository->with([
            'images',
            'videos',
            'categories',
            'inventories',
            'attribute_values',
            'super_attributes',
            'variants',
            'product_flats',
        ])->find($id);

        if (! $product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $flat = $product->product_flats->where('locale', 'en')->first()
            ?? $product->product_flats->first();

        $data = [
            'id' => $product->id,
            'type' => $product->type,
            'sku' => $product->sku,
            'status' => $product->status,
            'name' => $flat?->name ?? $product->sku,
            'url_key' => $flat?->url_key ?? '',
            'short_description' => $flat?->short_description ?? '',
            'description' => $flat?->description ?? '',
            'price' => $flat?->price ?? null,
            'special_price' => $flat?->special_price ?? null,
            'cost' => $flat?->cost ?? null,
            'weight' => $flat?->weight ?? null,
            'featured' => (int) ($flat?->featured ?? 0),
            'new' => (int) ($flat?->new ?? 0),
            'delivery_info' => $flat?->delivery_info ?? '',
            'care_instructions' => $flat?->care_instructions ?? '',
            'images' => $product->images->sortBy('position')->map(fn ($img) => [
                'id' => $img->id,
                'url' => $img->url,
                'path' => $img->path,
                'position' => $img->position,
            ])->values()->toArray(),
            'videos' => $product->videos->map(fn ($v) => [
                'id' => $v->id,
                'url' => $v->url ?? '',
            ])->toArray(),
            'categories' => $product->categories->map(fn ($cat) => [
                'id' => $cat->id,
                'name' => $cat->name,
            ])->toArray(),
            'quantity' => $product->inventories->sum('qty'),
            'stock_status' => $product->inventories->sum('qty') > 0 ? 'in_stock' : 'out_of_stock',
            'super_attributes' => $this->getSuperAttributes($product),
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
        ];

        return response()->json(['data' => $data]);
    }

    /**
     * Get attribute options for configurable attributes.
     */
    public function attributeOptions(): JsonResponse
    {
        $codes = ['size', 'color', 'sleeve'];
        $result = [];

        foreach ($codes as $code) {
            $attribute = $this->attributeRepository->findOneByField('code', $code);

            if ($attribute) {
                $result[$code] = $attribute->options->map(function ($option) {
                    return [
                        'id' => $option->id,
                        'admin_name' => $option->admin_name,
                        'label' => $option->translations->where('locale', 'en')->first()?->label
                            ?? $option->admin_name,
                        'sort_order' => $option->sort_order,
                    ];
                })->sortBy('sort_order')->values()->toArray();
            }
        }

        return response()->json(['data' => $result]);
    }

    /**
     * Extract super attributes from a configurable product.
     */
    private function getSuperAttributes($product): array
    {
        if ($product->type !== 'configurable') {
            return [];
        }

        $result = [];

        foreach ($product->super_attributes as $attr) {
            $code = $attr->code;
            $options = $product->variants->flatMap(function ($variant) use ($attr) {
                return $variant->attribute_values
                    ->where('attribute_id', $attr->id)
                    ->pluck('integer_value');
            })->unique()->values()->toArray();

            $result[$code] = $options;
        }

        return $result;
    }

    /**
     * Create a new product.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'type' => 'required|in:simple,configurable,virtual,downloadable,grouped,bundle',
            'sku' => 'required|unique:products,sku',
        ]);

        try {
            Event::dispatch('catalog.product.create.before');

            $data = [
                'type' => $request->input('type', 'simple'),
                'sku' => $request->input('sku'),
                'attribute_family_id' => $request->input('attribute_family_id', 1),
            ];

            if ($request->input('type') === 'configurable' && $request->has('super_attributes')) {
                $data['super_attributes'] = $request->input('super_attributes');
            }

            $product = $this->productRepository->create($data);

            // Update product attribute/locale details
            $updateData = $this->extractProductFields($request);

            if (! empty($updateData)) {
                $updateData['locale'] = $request->get('locale', 'en');
                $updateData['channel'] = $request->get('channel', core()->getDefaultChannelCode());
                $product = $this->productRepository->update($updateData, $product->id);
            }

            // Handle category assignment
            if ($request->has('categories') || $request->has('categories[]')) {
                $categories = $request->input('categories', $request->input('categories[]', []));
                $product->categories()->sync((array) $categories);
            }

            // Handle inventory — accept 'quantity' from frontend
            $qty = $request->input('quantity', $request->input('inventory', null));
            if ($qty !== null) {
                $this->productInventoryRepository->saveInventories([
                    'inventories' => [1 => (int) $qty],
                ], $product);
            }

            Event::dispatch('catalog.product.create.after', $product);

            $product->load(['images', 'categories', 'inventories']);

            return response()->json([
                'data' => $product,
                'message' => 'Product created successfully.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update an existing product.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if (! $product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        try {
            Event::dispatch('catalog.product.update.before', $id);

            $data = $this->extractProductFields($request);

            if ($request->filled('sku')) {
                $data['sku'] = $request->input('sku');
            }

            $data['locale'] = $request->get('locale', 'en');
            $data['channel'] = $request->get('channel', core()->getDefaultChannelCode());

            $product = $this->productRepository->update($data, $id);

            // Handle category assignment
            if ($request->has('categories') || $request->has('categories[]')) {
                $categories = $request->input('categories', $request->input('categories[]', []));
                $product->categories()->sync((array) $categories);
            }

            // Handle inventory — accept 'quantity' from frontend
            $qty = $request->input('quantity', $request->input('inventory', null));
            if ($qty !== null) {
                $this->productInventoryRepository->saveInventories([
                    'inventories' => [1 => (int) $qty],
                ], $product);
            }

            // Handle image deletions
            if ($request->has('removed_images')) {
                foreach ((array) $request->input('removed_images') as $imageId) {
                    $image = $this->productImageRepository->find($imageId);
                    if ($image && $image->product_id === $product->id) {
                        Storage::delete($image->path);
                        $this->productImageRepository->delete($imageId);
                    }
                }
            }

            Event::dispatch('catalog.product.update.after', $product);

            $product->load(['images', 'categories', 'inventories']);

            return response()->json([
                'data' => $product,
                'message' => 'Product updated successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Delete product.
     */
    public function destroy(int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if (! $product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        try {
            Event::dispatch('catalog.product.delete.before', $id);

            $this->productRepository->delete($id);

            Event::dispatch('catalog.product.delete.after', $id);

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Upload images for a product.
     */
    public function uploadImages(Request $request, int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if (! $product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        $request->validate([
            'image' => 'required|file|image|max:10240',
        ]);

        try {
            $file = $request->file('image');
            $type = $request->input('type', 'images');

            $path = cloudinary_upload($file, 'products', (string) $product->id);

            $position = $product->images()->count() + 1;

            $image = $this->productImageRepository->create([
                'type' => 'images',
                'path' => $path,
                'product_id' => $product->id,
                'position' => $position,
            ]);

            return response()->json([
                'data' => $image,
                'message' => 'Image uploaded successfully.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Delete a specific product image.
     */
    public function deleteImage(int $id, int $imageId): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if (! $product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        $image = $this->productImageRepository->find($imageId);

        if (! $image || $image->product_id !== $product->id) {
            return response()->json(['message' => 'Image not found.'], 404);
        }

        try {
            Storage::delete($image->path);
            $this->productImageRepository->delete($imageId);

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Upload a video URL for a product.
     */
    public function uploadVideo(Request $request, int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if (! $product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        $request->validate([
            'video_url' => 'required|url',
        ]);

        // Store video URL in product attribute
        try {
            $this->productRepository->update([
                'locale' => $request->get('locale', 'en'),
                'channel' => $request->get('channel', core()->getDefaultChannelCode()),
                'video_url' => $request->input('video_url'),
            ], $id);

            return response()->json([
                'message' => 'Video URL saved successfully.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Extract common product fields from request.
     */
    protected function extractProductFields(Request $request): array
    {
        $fields = [
            'name', 'url_key', 'short_description', 'description',
            'price', 'special_price', 'cost', 'weight',
            'status', 'featured', 'new',
            'meta_title', 'meta_description', 'meta_keywords',
            'video_url',
        ];

        $data = [];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $data[$field] = $request->input($field);
            }
        }

        // Map frontend field names to backend
        if ($request->has('delivery_timeline') && ! $request->has('delivery_info')) {
            $data['delivery_info'] = $request->input('delivery_timeline');
        } elseif ($request->has('delivery_info')) {
            $data['delivery_info'] = $request->input('delivery_info');
        }

        if ($request->has('care_instructions')) {
            $data['care_instructions'] = $request->input('care_instructions');
        }

        return $data;
    }
}
