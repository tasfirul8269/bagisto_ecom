<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webkul\Category\Models\Category;
use Webkul\Category\Models\CategoryTranslation;

class CategoryCleanupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rootCategory = Category::query()->find(1);

        if (! $rootCategory) {
            $this->command?->error('Root category with ID 1 was not found.');

            return;
        }

        $structure = $this->getCategoryStructure();
        $createdCount = 0;

        DB::transaction(function () use ($structure, &$createdCount) {
            CategoryTranslation::query()
                ->where('category_id', '>', 1)
                ->delete();

            Category::query()
                ->where('id', '>', 1)
                ->delete();

            Category::fixTree();

            foreach ($structure as $parentPosition => $parentCategory) {
                $parent = $this->createCategory(
                    parentId: 1,
                    position: $parentPosition + 1,
                    name: $parentCategory['name'],
                    slug: $parentCategory['slug'],
                    bnName: $parentCategory['bn_name'],
                    description: $parentCategory['description'],
                    bnDescription: $parentCategory['bn_description'],
                );

                $createdCount++;

                foreach ($parentCategory['children'] as $childPosition => $childCategory) {
                    $this->createCategory(
                        parentId: $parent->id,
                        position: $childPosition + 1,
                        name: $childCategory['name'],
                        slug: $childCategory['slug'],
                        bnName: $childCategory['bn_name'],
                        description: $childCategory['description'],
                        bnDescription: $childCategory['bn_description'],
                    );

                    $createdCount++;
                }
            }

            Category::fixTree();
        });

        $this->command?->info("Category cleanup complete. Created {$createdCount} categories under Root.");
    }

    /**
     * Create a category and insert its translations.
     */
    protected function createCategory(
        int $parentId,
        int $position,
        string $name,
        string $slug,
        string $bnName,
        string $description,
        string $bnDescription
    ): Category {
        $category = Category::query()->create([
            'parent_id' => $parentId,
            'position' => $position,
            'status' => 1,
            'display_mode' => 'products_and_description',
        ]);

        DB::table('category_translations')->insert([
            [
                'category_id' => $category->id,
                'locale' => 'en',
                'locale_id' => null,
                'name' => $name,
                'slug' => $slug,
                'url_path' => $slug,
                'description' => $description,
                'meta_title' => null,
                'meta_description' => null,
                'meta_keywords' => null,
            ],
            [
                'category_id' => $category->id,
                'locale' => 'bn',
                'locale_id' => null,
                'name' => $bnName,
                'slug' => $slug,
                'url_path' => $slug,
                'description' => $bnDescription,
                'meta_title' => null,
                'meta_description' => null,
                'meta_keywords' => null,
            ],
        ]);

        return $category;
    }

    /**
     * Get the target two-level category structure.
     */
    protected function getCategoryStructure(): array
    {
        return [
            [
                'name' => 'Kids',
                'bn_name' => 'কিডস',
                'slug' => 'kids',
                'description' => '<p>Explore practical everyday styles for kids.</p>',
                'bn_description' => '<p>বাচ্চাদের জন্য ব্যবহারিক দৈনন্দিন স্টাইল দেখুন।</p>',
                'children' => [
                    [
                        'name' => 'Boys',
                        'bn_name' => 'ছেলেদের',
                        'slug' => 'kids-boys',
                        'description' => '<p>Shop clothing for boys.</p>',
                        'bn_description' => '<p>ছেলেদের পোশাক কিনুন।</p>',
                    ],
                    [
                        'name' => 'Girls',
                        'bn_name' => 'মেয়েদের',
                        'slug' => 'kids-girls',
                        'description' => '<p>Shop clothing for girls.</p>',
                        'bn_description' => '<p>মেয়েদের পোশাক কিনুন।</p>',
                    ],
                ],
            ],
            [
                'name' => 'Men',
                'bn_name' => 'মেন',
                'slug' => 'men',
                'description' => '<p>Discover essential menswear categories.</p>',
                'bn_description' => '<p>প্রয়োজনীয় পুরুষদের পোশাকের ক্যাটাগরি দেখুন।</p>',
                'children' => [
                    [
                        'name' => 'Polo',
                        'bn_name' => 'পোলো',
                        'slug' => 'men-polo',
                        'description' => '<p>Shop men\'s polo styles.</p>',
                        'bn_description' => '<p>পুরুষদের পোলো স্টাইল কিনুন।</p>',
                    ],
                    [
                        'name' => 'Shirts',
                        'bn_name' => 'শার্টস',
                        'slug' => 'men-shirts',
                        'description' => '<p>Shop men\'s shirts.</p>',
                        'bn_description' => '<p>পুরুষদের শার্ট কিনুন।</p>',
                    ],
                    [
                        'name' => 'T-Shirts',
                        'bn_name' => 'টি-শার্টস',
                        'slug' => 'men-tshirts',
                        'description' => '<p>Shop men\'s t-shirts.</p>',
                        'bn_description' => '<p>পুরুষদের টি-শার্ট কিনুন।</p>',
                    ],
                    [
                        'name' => 'Trousers',
                        'bn_name' => 'ট্রাউজার্স',
                        'slug' => 'men-trousers',
                        'description' => '<p>Shop men\'s trousers.</p>',
                        'bn_description' => '<p>পুরুষদের ট্রাউজার্স কিনুন।</p>',
                    ],
                    [
                        'name' => 'Jeans',
                        'bn_name' => 'জিন্স',
                        'slug' => 'men-jeans',
                        'description' => '<p>Shop men\'s jeans.</p>',
                        'bn_description' => '<p>পুরুষদের জিন্স কিনুন।</p>',
                    ],
                    [
                        'name' => 'Winter',
                        'bn_name' => 'উইন্টার',
                        'slug' => 'men-winter',
                        'description' => '<p>Shop men\'s winter essentials.</p>',
                        'bn_description' => '<p>পুরুষদের শীতের প্রয়োজনীয় পোশাক কিনুন।</p>',
                    ],
                    [
                        'name' => 'Coat',
                        'bn_name' => 'কোট',
                        'slug' => 'men-coat',
                        'description' => '<p>Shop men\'s coats.</p>',
                        'bn_description' => '<p>পুরুষদের কোট কিনুন।</p>',
                    ],
                ],
            ],
            [
                'name' => 'Women',
                'bn_name' => 'উইমেন',
                'slug' => 'women',
                'description' => '<p>Discover essential womenswear categories.</p>',
                'bn_description' => '<p>প্রয়োজনীয় নারীদের পোশাকের ক্যাটাগরি দেখুন।</p>',
                'children' => [
                    [
                        'name' => 'Knitted-Top',
                        'bn_name' => 'নিটেড টপ',
                        'slug' => 'women-knitted-top',
                        'description' => '<p>Shop women\'s knitted tops.</p>',
                        'bn_description' => '<p>নারীদের নিটেড টপ কিনুন।</p>',
                    ],
                    [
                        'name' => 'Shirts',
                        'bn_name' => 'শার্টস',
                        'slug' => 'women-shirts',
                        'description' => '<p>Shop women\'s shirts.</p>',
                        'bn_description' => '<p>নারীদের শার্ট কিনুন।</p>',
                    ],
                    [
                        'name' => 'T-Shirts',
                        'bn_name' => 'টি-শার্টস',
                        'slug' => 'women-tshirts',
                        'description' => '<p>Shop women\'s t-shirts.</p>',
                        'bn_description' => '<p>নারীদের টি-শার্ট কিনুন।</p>',
                    ],
                    [
                        'name' => 'Trousers',
                        'bn_name' => 'ট্রাউজার্স',
                        'slug' => 'women-trousers',
                        'description' => '<p>Shop women\'s trousers.</p>',
                        'bn_description' => '<p>নারীদের ট্রাউজার্স কিনুন।</p>',
                    ],
                    [
                        'name' => 'Co-Ord Sets',
                        'bn_name' => 'কো-অর্ড সেটস',
                        'slug' => 'women-co-ord-sets',
                        'description' => '<p>Shop women\'s co-ord sets.</p>',
                        'bn_description' => '<p>নারীদের কো-অর্ড সেটস কিনুন।</p>',
                    ],
                    [
                        'name' => 'Jeans',
                        'bn_name' => 'জিন্স',
                        'slug' => 'women-jeans',
                        'description' => '<p>Shop women\'s jeans.</p>',
                        'bn_description' => '<p>নারীদের জিন্স কিনুন।</p>',
                    ],
                    [
                        'name' => 'Winter',
                        'bn_name' => 'উইন্টার',
                        'slug' => 'women-winter',
                        'description' => '<p>Shop women\'s winter essentials.</p>',
                        'bn_description' => '<p>নারীদের শীতের প্রয়োজনীয় পোশাক কিনুন।</p>',
                    ],
                ],
            ],
        ];
    }
}
