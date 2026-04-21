<v-product-card
    <?php echo e($attributes); ?>

    :product="product"
>
</v-product-card>

<?php if (! $__env->hasRenderedOnce('adb2855e-fa8e-456a-a291-472618844d8e')): $__env->markAsRenderedOnce('adb2855e-fa8e-456a-a291-472618844d8e');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-product-card-template"
    >
        <!-- Grid Card -->
        <div
            class="group relative flex h-full w-full flex-col"
            v-if="mode != 'list'"
        >
            <?php
                $productBaseUrl = url('/');
            ?>

            <div class="relative overflow-hidden rounded-[12px] bg-zinc-100">
                <?php echo view_render_event('frooxi.shop.components.products.card.image.before'); ?>


                <!-- Product Image -->
                <a
                    :href="`<?php echo $productBaseUrl; ?>/${product.url_key}`"
                    :aria-label="product.name + ' '"
                    class="block"
                >
                    <?php if (isset($component)) { $__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'after:content-[\' \'] relative block overflow-hidden rounded-[12px] bg-zinc-100 transition duration-700 ease-out after:block after:pb-[calc(100%+9px)] group-hover:scale-[1.05]',':src' => 'product.base_image.medium_image_url',':srcset' => '`
                            ${product.base_image.small_image_url} 150w,
                            ${product.base_image.medium_image_url} 300w,
                        `','sizes' => '(max-width: 768px) 150px, (max-width: 1200px) 300px, 600px',':key' => 'product.id',':index' => 'product.id','width' => '291','height' => '300',':alt' => 'product.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'after:content-[\' \'] relative block overflow-hidden rounded-[12px] bg-zinc-100 transition duration-700 ease-out after:block after:pb-[calc(100%+9px)] group-hover:scale-[1.05]',':src' => 'product.base_image.medium_image_url',':srcset' => '`
                            ${product.base_image.small_image_url} 150w,
                            ${product.base_image.medium_image_url} 300w,
                        `','sizes' => '(max-width: 768px) 150px, (max-width: 1200px) 300px, 600px',':key' => 'product.id',':index' => 'product.id','width' => '291','height' => '300',':alt' => 'product.name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848)): ?>
<?php $attributes = $__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848; ?>
<?php unset($__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848)): ?>
<?php $component = $__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848; ?>
<?php unset($__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848); ?>
<?php endif; ?>
                </a>

                <?php echo view_render_event('frooxi.shop.components.products.card.image.after'); ?>


                <!-- Product Ratings -->
                <?php echo view_render_event('frooxi.shop.components.products.card.average_ratings.before'); ?>


                <?php if(core()->getConfigData('catalog.products.review.summary') == 'star_counts'): ?>
                    <?php if (isset($component)) { $__componentOriginal189c61a27640c2633434112e6503d31c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal189c61a27640c2633434112e6503d31c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.ratings','data' => ['class' => 'absolute bottom-3 z-10 items-center rounded-full !border-white/80 bg-white/90 !px-2.5 !py-1 text-xs shadow-sm backdrop-blur ltr:left-3 rtl:right-3',':average' => 'product.ratings.average',':total' => 'product.ratings.total',':rating' => 'false','vIf' => 'product.ratings.total']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::products.ratings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute bottom-3 z-10 items-center rounded-full !border-white/80 bg-white/90 !px-2.5 !py-1 text-xs shadow-sm backdrop-blur ltr:left-3 rtl:right-3',':average' => 'product.ratings.average',':total' => 'product.ratings.total',':rating' => 'false','v-if' => 'product.ratings.total']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $attributes = $__attributesOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__attributesOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $component = $__componentOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__componentOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal189c61a27640c2633434112e6503d31c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal189c61a27640c2633434112e6503d31c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.ratings','data' => ['class' => 'absolute bottom-3 z-10 items-center rounded-full !border-white/80 bg-white/90 !px-2.5 !py-1 text-xs shadow-sm backdrop-blur ltr:left-3 rtl:right-3',':average' => 'product.ratings.average',':total' => 'product.reviews.total',':rating' => 'false','vIf' => 'product.reviews.total']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::products.ratings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute bottom-3 z-10 items-center rounded-full !border-white/80 bg-white/90 !px-2.5 !py-1 text-xs shadow-sm backdrop-blur ltr:left-3 rtl:right-3',':average' => 'product.ratings.average',':total' => 'product.reviews.total',':rating' => 'false','v-if' => 'product.reviews.total']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $attributes = $__attributesOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__attributesOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $component = $__componentOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__componentOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php echo view_render_event('frooxi.shop.components.products.card.average_ratings.after'); ?>


                <div class="pointer-events-none absolute inset-0">
                    <!-- Product Sale Badge -->
                    <p
                        class="absolute top-3 z-10 inline-flex rounded-full bg-red-500 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-[0.08em] text-white shadow-sm ltr:left-3 rtl:right-3"
                        v-if="product.on_sale"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.sale'); ?>
                    </p>

                    <!-- Product New Badge -->
                    <p
                        class="absolute top-3 z-10 inline-flex rounded-full bg-navyBlue px-2.5 py-1 text-[11px] font-semibold uppercase tracking-[0.08em] text-white shadow-sm ltr:left-3 rtl:right-3"
                        v-else-if="product.is_new"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.new'); ?>
                    </p>

                    <div class="pointer-events-auto absolute top-3 z-10 flex flex-col gap-2 opacity-100 transition-all duration-300 md:translate-x-2 md:opacity-0 md:group-hover:translate-x-0 md:group-hover:opacity-100 ltr:right-3 rtl:left-3">
                        <?php echo view_render_event('frooxi.shop.components.products.card.wishlist_option.before'); ?>


                        <?php if(core()->getConfigData('customer.settings.wishlist.wishlist_option')): ?>
                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-zinc-200/80 bg-white/95 text-lg text-zinc-700 shadow-sm backdrop-blur"
                                role="button"
                                aria-label="<?php echo app('translator')->get('shop::app.components.products.card.add-to-wishlist'); ?>"
                                tabindex="0"
                                :class="product.is_wishlist ? 'icon-heart-fill !text-red-500' : 'icon-heart'"
                                @click="addToWishlist()"
                            >
                            </span>
                        <?php endif; ?>

                        <?php echo view_render_event('frooxi.shop.components.products.card.wishlist_option.after'); ?>

                    </div>

                    <?php if(core()->getConfigData('sales.checkout.shopping_cart.cart_page')): ?>
                        <?php echo view_render_event('frooxi.shop.components.products.card.add_to_cart.before'); ?>


                        <!-- Configurable Products: Show Color Swatches -->
                        <template v-if="product.type === 'configurable' && product.color_swatches && product.color_swatches.length">
                            <div class="pointer-events-auto absolute bottom-3 left-0 right-0 z-10 flex justify-center gap-1.5" style="padding:0 10px;">
                                <a
                                    v-for="swatch in product.color_swatches"
                                    :key="swatch.id"
                                    :href="`<?php echo $productBaseUrl; ?>/${product.url_key}`"
                                    class="block h-5 w-5 rounded-full border-2 border-white shadow transition-transform hover:scale-110"
                                    :style="{ backgroundColor: swatch.hex }"
                                    :title="swatch.name"
                                ></a>
                            </div>
                        </template>

                        <!-- Simple/Other Products: Show Add to Cart Button -->
                        <template v-else-if="product.is_saleable">
                            <button
                                class="pointer-events-auto absolute bottom-3 z-10 flex h-11 w-11 items-center justify-center rounded-xl bg-zinc-950 text-white shadow-lg transition hover:bg-black md:hidden ltr:right-3 rtl:left-3"
                                :aria-label="'<?php echo app('translator')->get('shop::app.components.products.card.add-to-cart'); ?>'"
                                :disabled="isAddingToCart"
                                @click="addToCart()"
                            >
                                <span
                                    class="icon-cart text-xl"
                                    aria-hidden="true"
                                >
                                </span>
                            </button>

                            <button
                                class="pointer-events-auto absolute bottom-3 z-10 hidden w-[calc(100%-24px)] translate-y-3 items-center justify-center rounded-[10px] bg-zinc-950 px-4 py-3 text-sm font-medium text-white opacity-0 shadow-lg transition-all duration-300 ease-out hover:bg-black group-hover:translate-y-0 group-hover:opacity-100 md:flex ltr:left-3 rtl:right-3"
                                :disabled="isAddingToCart"
                                @click="addToCart()"
                            >
                                <?php echo app('translator')->get('shop::app.components.products.card.add-to-cart'); ?>
                            </button>
                        </template>

                        <template v-else>
                            <a
                                :href="`<?php echo $productBaseUrl; ?>/${product.url_key}`"
                                @click.prevent="navigateToProduct()"
                                class="pointer-events-auto absolute bottom-3 z-10 flex h-11 w-11 items-center justify-center rounded-xl bg-zinc-950 text-white shadow-lg transition hover:bg-black md:hidden ltr:right-3 rtl:left-3"
                                :aria-label="product.name"
                            >
                                <span
                                    class="icon-view text-xl"
                                    aria-hidden="true"
                                >
                                </span>
                            </a>

                            <a
                                :href="`<?php echo $productBaseUrl; ?>/${product.url_key}`"
                                @click.prevent="navigateToProduct()"
                                class="pointer-events-auto absolute bottom-3 z-10 hidden w-[calc(100%-24px)] translate-y-3 items-center justify-center rounded-[10px] bg-zinc-950 px-4 py-3 text-sm font-medium text-white opacity-0 shadow-lg transition-all duration-300 ease-out hover:bg-black group-hover:translate-y-0 group-hover:opacity-100 md:flex ltr:left-3 rtl:right-3"
                            >
                                View Product
                            </a>
                        </template>

                        <?php echo view_render_event('frooxi.shop.components.products.card.add_to_cart.after'); ?>

                    <?php endif; ?>
                </div>
            </div>

            <!-- Product Information Section -->
            <div class="flex flex-1 flex-col gap-1.5 px-1 pt-3">
                <?php echo view_render_event('frooxi.shop.components.products.card.name.before'); ?>


                <a
                    :href="`<?php echo $productBaseUrl; ?>/${product.url_key}`"
                    class="line-clamp-2 text-sm font-normal leading-5 text-zinc-900 transition-colors hover:text-zinc-700 md:text-[15px]"
                >
                    {{ product.name }}
                </a>

                <?php echo view_render_event('frooxi.shop.components.products.card.name.after'); ?>


                <!-- Pricing -->
                <?php echo view_render_event('frooxi.shop.components.products.card.price.before'); ?>


                <div
                    class="flex flex-wrap items-center gap-x-2 gap-y-1 text-[15px] font-semibold leading-none text-zinc-900"
                    v-html="product.price_html"
                >
                </div>

                <?php echo view_render_event('frooxi.shop.components.products.card.price.after'); ?>

            </div>
        </div>

        <!-- List Card -->
        <div
            class="relative flex max-w-max grid-cols-2 gap-4 overflow-hidden rounded max-sm:flex-wrap"
            v-else
        >
            <div class="group relative max-h-[258px] max-w-[250px] overflow-hidden">

                <?php echo view_render_event('frooxi.shop.components.products.card.image.before'); ?>


                <a :href="`<?php echo $productBaseUrl; ?>/${product.url_key}`">
                    <?php if (isset($component)) { $__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['class' => 'after:content-[\' \'] relative min-w-[250px] bg-zinc-100 transition-all duration-300 after:block after:pb-[calc(100%+9px)] group-hover:scale-105',':src' => 'product.base_image.medium_image_url',':key' => 'product.id',':index' => 'product.id','width' => '291','height' => '300',':alt' => 'product.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'after:content-[\' \'] relative min-w-[250px] bg-zinc-100 transition-all duration-300 after:block after:pb-[calc(100%+9px)] group-hover:scale-105',':src' => 'product.base_image.medium_image_url',':key' => 'product.id',':index' => 'product.id','width' => '291','height' => '300',':alt' => 'product.name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848)): ?>
<?php $attributes = $__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848; ?>
<?php unset($__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848)): ?>
<?php $component = $__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848; ?>
<?php unset($__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848); ?>
<?php endif; ?>
                </a>

                <?php echo view_render_event('frooxi.shop.components.products.card.image.after'); ?>


                <div class="action-items bg-black">
                    <p
                        class="absolute top-5 inline-block rounded-[44px] bg-red-500 px-2.5 text-sm text-white ltr:left-5 max-sm:ltr:left-2 rtl:right-5"
                        v-if="product.on_sale"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.sale'); ?>
                    </p>

                    <p
                        class="absolute top-5 inline-block rounded-[44px] bg-navyBlue px-2.5 text-sm text-white ltr:left-5 max-sm:ltr:left-2 rtl:right-5"
                        v-else-if="product.is_new"
                    >
                        <?php echo app('translator')->get('shop::app.components.products.card.new'); ?>
                    </p>

                    <div class="opacity-0 transition-all duration-300 group-hover:bottom-0 group-hover:opacity-100 max-sm:opacity-100">

                        <?php echo view_render_event('frooxi.shop.components.products.card.wishlist_option.before'); ?>


                        <?php if(core()->getConfigData('customer.settings.wishlist.wishlist_option')): ?>
                            <span
                                class="absolute top-5 flex h-[30px] w-[30px] cursor-pointer items-center justify-center rounded-md bg-white text-2xl ltr:right-5 rtl:left-5"
                                role="button"
                                aria-label="<?php echo app('translator')->get('shop::app.components.products.card.add-to-wishlist'); ?>"
                                tabindex="0"
                                :class="product.is_wishlist ? 'icon-heart-fill text-red-600' : 'icon-heart'"
                                @click="addToWishlist()"
                            >
                            </span>
                        <?php endif; ?>

                        <?php echo view_render_event('frooxi.shop.components.products.card.wishlist_option.after'); ?>

                    </div>
                </div>
            </div>

            <div class="grid content-start gap-4">

                <?php echo view_render_event('frooxi.shop.components.products.card.name.before'); ?>


                <p class="text-base">
                    {{ product.name }}
                </p>

                <?php echo view_render_event('frooxi.shop.components.products.card.name.after'); ?>


                <?php echo view_render_event('frooxi.shop.components.products.card.price.before'); ?>


                <div
                    class="flex gap-2.5 text-lg font-semibold"
                    v-html="product.price_html"
                >
                </div>

                <?php echo view_render_event('frooxi.shop.components.products.card.price.after'); ?>


                <!-- Needs to implement that in future -->
                <div class="flex hidden gap-4">
                    <span class="block h-[30px] w-[30px] rounded-full bg-[#B5DCB4]">
                    </span>

                    <span class="block h-[30px] w-[30px] rounded-full bg-zinc-500">
                    </span>
                </div>

                <?php echo view_render_event('frooxi.shop.components.products.card.average_ratings.before'); ?>


                <p class="text-sm text-zinc-500">
                    <template  v-if="! product.ratings.total">
                        <p class="text-sm text-zinc-500">
                            <?php echo app('translator')->get('shop::app.components.products.card.review-description'); ?>
                        </p>
                    </template>

                    <template v-else>
                        <?php if(core()->getConfigData('catalog.products.review.summary') == 'star_counts'): ?>
                            <?php if (isset($component)) { $__componentOriginal189c61a27640c2633434112e6503d31c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal189c61a27640c2633434112e6503d31c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.ratings','data' => [':average' => 'product.ratings.average',':total' => 'product.ratings.total',':rating' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::products.ratings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([':average' => 'product.ratings.average',':total' => 'product.ratings.total',':rating' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $attributes = $__attributesOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__attributesOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $component = $__componentOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__componentOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginal189c61a27640c2633434112e6503d31c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal189c61a27640c2633434112e6503d31c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.ratings','data' => [':average' => 'product.ratings.average',':total' => 'product.reviews.total',':rating' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::products.ratings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([':average' => 'product.ratings.average',':total' => 'product.reviews.total',':rating' => 'false']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $attributes = $__attributesOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__attributesOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal189c61a27640c2633434112e6503d31c)): ?>
<?php $component = $__componentOriginal189c61a27640c2633434112e6503d31c; ?>
<?php unset($__componentOriginal189c61a27640c2633434112e6503d31c); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </template>
                </p>

                <?php echo view_render_event('frooxi.shop.components.products.card.average_ratings.after'); ?>


                <?php if(core()->getConfigData('sales.checkout.shopping_cart.cart_page')): ?>

                    <?php echo view_render_event('frooxi.shop.components.products.card.add_to_cart.before'); ?>


                    <?php if (isset($component)) { $__componentOriginal30786825665921390a816ebee82cf580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30786825665921390a816ebee82cf580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.button.index','data' => ['class' => 'primary-button whitespace-nowrap px-8 py-2.5','title' => trans('shop::app.components.products.card.add-to-cart'),':loading' => 'isAddingToCart',':disabled' => '! product.is_saleable || isAddingToCart','@click' => 'addToCart()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'primary-button whitespace-nowrap px-8 py-2.5','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.components.products.card.add-to-cart')),':loading' => 'isAddingToCart',':disabled' => '! product.is_saleable || isAddingToCart','@click' => 'addToCart()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30786825665921390a816ebee82cf580)): ?>
<?php $attributes = $__attributesOriginal30786825665921390a816ebee82cf580; ?>
<?php unset($__attributesOriginal30786825665921390a816ebee82cf580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30786825665921390a816ebee82cf580)): ?>
<?php $component = $__componentOriginal30786825665921390a816ebee82cf580; ?>
<?php unset($__componentOriginal30786825665921390a816ebee82cf580); ?>
<?php endif; ?>

                    <?php echo view_render_event('frooxi.shop.components.products.card.add_to_cart.after'); ?>


                <?php endif; ?>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-product-card', {
            template: '#v-product-card-template',

            props: ['mode', 'product'],

            data() {
                return {
                    isCustomer: '<?php echo e(auth()->guard('customer')->check()); ?>',

                    isAddingToCart: false,
                }
            },

            methods: {
                navigateToProduct() {
                    if (this.product && this.product.url_key) {
                        window.location.href = '/' + this.product.url_key;
                    }
                },

                addToWishlist() {
                    if (this.isCustomer) {
                        this.$axios.post(`<?php echo e(route('shop.api.customers.account.wishlist.store')); ?>`, {
                                product_id: this.product.id
                            })
                            .then(response => {
                                this.product.is_wishlist = ! this.product.is_wishlist;

                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.data.message });
                            })
                            .catch(error => {});
                        } else {
                            window.location.href = "<?php echo e(route('shop.customer.session.index')); ?>";
                        }
                },

                addToCompare(productId) {
                    /**
                     * This will handle for customers.
                     */
                    if (this.isCustomer) {
                        this.$axios.post('/api/compare', {
                                'product_id': productId
                            })
                            .then(response => {
                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.data.message });
                            })
                            .catch(error => {
                                if ([400, 422].includes(error.response.status)) {
                                    this.$emitter.emit('add-flash', { type: 'warning', message: error.response.data.data.message });

                                    return;
                                }

                                this.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message});
                            });

                        return;
                    }

                    /**
                     * This will handle for guests.
                     */
                    let items = this.getStorageValue() ?? [];

                    if (items.length) {
                        if (! items.includes(productId)) {
                            items.push(productId);

                            localStorage.setItem('compare_items', JSON.stringify(items));

                            this.$emitter.emit('add-flash', { type: 'success', message: "<?php echo app('translator')->get('shop::app.components.products.card.add-to-compare-success'); ?>" });
                        } else {
                            this.$emitter.emit('add-flash', { type: 'warning', message: "<?php echo app('translator')->get('shop::app.components.products.card.already-in-compare'); ?>" });
                        }
                    } else {
                        localStorage.setItem('compare_items', JSON.stringify([productId]));

                        this.$emitter.emit('add-flash', { type: 'success', message: "<?php echo app('translator')->get('shop::app.components.products.card.add-to-compare-success'); ?>" });

                    }
                },

                getStorageValue(key) {
                    let value = localStorage.getItem('compare_items');

                    if (! value) {
                        return [];
                    }

                    return JSON.parse(value);
                },

                addToCart() {
                    this.isAddingToCart = true;

                    this.$axios.post('<?php echo e(route("shop.api.checkout.cart.store")); ?>', {
                            'quantity': 1,
                            'product_id': this.product.id,
                        })
                        .then(response => {
                            if (response.data.message) {
                                this.$emitter.emit('update-mini-cart', response.data.data );

                                this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            } else {
                                this.$emitter.emit('add-flash', { type: 'warning', message: response.data.data.message });
                            }

                            this.isAddingToCart = false;
                        })
                        .catch(error => {
                            this.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message });

                            if (error.response.data.redirect_uri) {
                                window.location.href = error.response.data.redirect_uri;
                            }

                            this.isAddingToCart = false;
                        });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/components/products/card.blade.php ENDPATH**/ ?>