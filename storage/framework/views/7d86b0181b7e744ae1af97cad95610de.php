<!-- SEO Meta Content -->
<?php $__env->startPush('meta'); ?>
    <meta name="description" content="<?php echo app('translator')->get('shop::app.checkout.cart.index.cart'); ?>"/>

    <meta name="keywords" content="<?php echo app('translator')->get('shop::app.checkout.cart.index.cart'); ?>"/>
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal2643b7d197f48caff2f606750db81304 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2643b7d197f48caff2f606750db81304 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => ['hasHeader' => false,'hasFeature' => false,'hasFooter' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['has-header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'has-feature' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'has-footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
    <!-- Page Title -->
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('shop::app.checkout.cart.index.cart'); ?>
     <?php $__env->endSlot(); ?>

    <?php echo view_render_event('frooxi.shop.checkout.cart.header.before'); ?>


    <div class="flex-auto">
        
        <div style="border-bottom:1px solid #e5e7eb;background:#fff;">
            <div class="container px-[60px] max-lg:px-8 max-md:px-4" style="display:flex;align-items:center;justify-content:space-between;padding-top:20px;padding-bottom:20px;">
                <a href="<?php echo e(route('shop.home.index')); ?>" style="display:flex;align-items:center;gap:12px;text-decoration:none;">
                    <img src="<?php echo e(asset('themes/shop/logo-gold.png')); ?>" alt="<?php echo e(config('app.name')); ?>" style="height:36px;width:auto;">
                </a>

                <div style="display:flex;align-items:center;gap:24px;">
                    
                    <span style="font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;color:#9ca3af;">
                        <span style="color:#111;"><?php echo app('translator')->get('shop::app.checkout.cart.index.cart'); ?></span>
                        &nbsp;›&nbsp;
                        <?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>
                    </span>

                    <?php if(auth()->guard('customer')->guest()): ?>
                        <?php echo $__env->make('shop::checkout.login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="container px-[60px] max-lg:px-8 max-md:px-4">
            <div style="padding:36px 0 12px;">
                <h1 style="font-family:'Montserrat',sans-serif;font-size:28px;font-weight:500;letter-spacing:.04em;text-transform:uppercase;color:#111;margin:0 0 6px;"><?php echo app('translator')->get('shop::app.checkout.cart.index.cart'); ?></h1>
                <p style="font-family:'Montserrat',sans-serif;font-size:13px;color:#6b7280;margin:0;">Review your items and move to checkout when you're ready.</p>
            </div>

            <?php echo view_render_event('frooxi.shop.checkout.cart.header.after'); ?>


            <?php echo view_render_event('frooxi.shop.checkout.cart.breadcrumbs.before'); ?>


            <!-- Breadcrumbs -->
            <?php if((core()->getConfigData('general.general.breadcrumbs.shop'))): ?>
                <?php if (isset($component)) { $__componentOriginaldef12fd0653509715c3bc62a609dde73 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldef12fd0653509715c3bc62a609dde73 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.breadcrumbs.index','data' => ['name' => 'cart']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'cart']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldef12fd0653509715c3bc62a609dde73)): ?>
<?php $attributes = $__attributesOriginaldef12fd0653509715c3bc62a609dde73; ?>
<?php unset($__attributesOriginaldef12fd0653509715c3bc62a609dde73); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldef12fd0653509715c3bc62a609dde73)): ?>
<?php $component = $__componentOriginaldef12fd0653509715c3bc62a609dde73; ?>
<?php unset($__componentOriginaldef12fd0653509715c3bc62a609dde73); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php echo view_render_event('frooxi.shop.checkout.cart.breadcrumbs.after'); ?>


            <?php
                $errors = \Webkul\Checkout\Facades\Cart::getErrors();
            ?>

            <?php if(! empty($errors) && $errors['error_code'] === 'MINIMUM_ORDER_AMOUNT'): ?>
                <div style="margin-top:16px;background:#fef3cd;border:1px solid #fde68a;border-radius:8px;padding:12px 20px;font-size:13px;color:#78350f;font-family:'Montserrat',sans-serif;">
                    <?php echo e($errors['message']); ?>: <?php echo e($errors['amount']); ?>

                </div>
            <?php endif; ?>

            <v-cart ref="vCart">
                <!-- Cart Shimmer Effect -->
                <?php if (isset($component)) { $__componentOriginal79f5de2ce8c947c8a98a12475d1bd385 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.cart.index','data' => ['count' => 3]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 3]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385)): ?>
<?php $attributes = $__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385; ?>
<?php unset($__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79f5de2ce8c947c8a98a12475d1bd385)): ?>
<?php $component = $__componentOriginal79f5de2ce8c947c8a98a12475d1bd385; ?>
<?php unset($__componentOriginal79f5de2ce8c947c8a98a12475d1bd385); ?>
<?php endif; ?>
            </v-cart>
        </div>
    </div>

    <?php if(core()->getConfigData('sales.checkout.shopping_cart.cross_sell')): ?>
        <?php echo view_render_event('frooxi.shop.checkout.cart.cross_sell_carousel.before'); ?>


        <!-- Cross-sell Product Carousal -->
        <?php if (isset($component)) { $__componentOriginalc7b94830d947988d2b7058066254da2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7b94830d947988d2b7058066254da2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.carousel','data' => ['title' => trans('shop::app.checkout.cart.index.cross-sell.title'),'src' => route('shop.api.checkout.cart.cross-sell.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::products.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.checkout.cart.index.cross-sell.title')),'src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.api.checkout.cart.cross-sell.index'))]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7b94830d947988d2b7058066254da2b)): ?>
<?php $attributes = $__attributesOriginalc7b94830d947988d2b7058066254da2b; ?>
<?php unset($__attributesOriginalc7b94830d947988d2b7058066254da2b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7b94830d947988d2b7058066254da2b)): ?>
<?php $component = $__componentOriginalc7b94830d947988d2b7058066254da2b; ?>
<?php unset($__componentOriginalc7b94830d947988d2b7058066254da2b); ?>
<?php endif; ?>

        <?php echo view_render_event('frooxi.shop.checkout.cart.cross_sell_carousel.after'); ?>

    <?php endif; ?>

    <?php if (! $__env->hasRenderedOnce('4b510d95-b550-49dd-b665-8ef825c36636')): $__env->markAsRenderedOnce('4b510d95-b550-49dd-b665-8ef825c36636');
$__env->startPush('scripts'); ?>
        <script
            type="text/x-template"
            id="v-cart-template"
        >
            <div>
                <!-- Cart Shimmer Effect -->
                <template v-if="isLoading">
                    <?php if (isset($component)) { $__componentOriginal79f5de2ce8c947c8a98a12475d1bd385 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.cart.index','data' => ['count' => 3]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 3]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385)): ?>
<?php $attributes = $__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385; ?>
<?php unset($__attributesOriginal79f5de2ce8c947c8a98a12475d1bd385); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79f5de2ce8c947c8a98a12475d1bd385)): ?>
<?php $component = $__componentOriginal79f5de2ce8c947c8a98a12475d1bd385; ?>
<?php unset($__componentOriginal79f5de2ce8c947c8a98a12475d1bd385); ?>
<?php endif; ?>
                </template>

                <!-- Cart Information -->
                <template v-else>
                    <div
                        class="mt-6 flex flex-wrap gap-10 pb-10 max-1060:flex-col max-md:mt-0 max-md:gap-8 max-md:pb-0"
                        v-if="cart?.items?.length"
                    >
                        <div class="flex flex-1 flex-col gap-5 max-md:gap-4">

                            <?php echo view_render_event('frooxi.shop.checkout.cart.cart_mass_actions.before'); ?>


                            
                            <div style="display:flex;align-items:center;justify-content:space-between;background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:14px 20px;">
                                <div style="display:flex;align-items:center;gap:10px;">
                                    <input
                                        type="checkbox"
                                        id="select-all"
                                        class="peer hidden"
                                        v-model="allSelected"
                                        @change="selectAll"
                                    >
                                    <label
                                        class="icon-uncheck peer-checked:icon-check-box cursor-pointer text-2xl text-navyBlue peer-checked:text-navyBlue"
                                        for="select-all"
                                        tabindex="0"
                                        aria-label="<?php echo app('translator')->get('shop::app.checkout.cart.index.select-all'); ?>"
                                    ></label>
                                    <span style="font-family:'Montserrat',sans-serif;font-size:13px;color:#374151;" role="heading" aria-level="2">
                                        {{ "<?php echo app('translator')->get('shop::app.checkout.cart.index.items-selected'); ?>".replace(':count', selectedItemsCount) }}
                                    </span>
                                </div>

                                <div v-if="selectedItemsCount" style="display:flex;align-items:center;gap:16px;">
                                    <span
                                        style="cursor:pointer;font-family:'Montserrat',sans-serif;font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:#ef4444;"
                                        role="button"
                                        tabindex="0"
                                        @click="removeSelectedItems"
                                    >
                                        <?php echo app('translator')->get('shop::app.checkout.cart.index.remove'); ?>
                                    </span>

                                    <?php if(auth()->guard()->check()): ?>
                                        <span style="width:1px;height:14px;background:#e5e7eb;"></span>
                                        <span
                                            style="cursor:pointer;font-family:'Montserrat',sans-serif;font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:#111;"
                                            role="button"
                                            tabindex="0"
                                            @click="moveToWishlistSelectedItems"
                                        >
                                            <?php echo app('translator')->get('shop::app.checkout.cart.index.move-to-wishlist'); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php echo view_render_event('frooxi.shop.checkout.cart.cart_mass_actions.after'); ?>

                            <?php echo view_render_event('frooxi.shop.checkout.cart.item.listing.before'); ?>


                            
                            <div v-for="item in cart?.items" :key="item.id">
                                <div style="display:flex;justify-content:space-between;align-items:flex-start;background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:20px;gap:16px;">

                                    
                                    <div style="display:flex;align-items:flex-start;gap:16px;flex:1;">

                                        
                                        <div style="padding-top:4px;">
                                            <input
                                                type="checkbox"
                                                :id="'item_' + item.id"
                                                class="peer hidden"
                                                v-model="item.selected"
                                                @change="updateAllSelected"
                                            >
                                            <label
                                                class="icon-uncheck peer-checked:icon-check-box cursor-pointer text-2xl text-navyBlue peer-checked:text-navyBlue"
                                                :for="'item_' + item.id"
                                                tabindex="0"
                                                aria-label="<?php echo app('translator')->get('shop::app.checkout.cart.index.select-cart-item'); ?>"
                                            ></label>
                                        </div>

                                        <?php echo view_render_event('frooxi.shop.checkout.cart.item_image.before'); ?>


                                        
                                        <a :href="'<?php echo e(route('shop.product_or_category.index', ':slug')); ?>'.replace(':slug', item.product_url_key)" style="flex-shrink:0;">
                                            <?php if (isset($component)) { $__componentOriginal3657c70d06ebc8c078f4ecac2ea1a848 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3657c70d06ebc8c078f4ecac2ea1a848 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => ['style' => 'width:96px;height:96px;object-fit:cover;border-radius:8px;',':src' => 'item.base_image.small_image_url',':alt' => 'item.name','width' => '96','height' => '96',':key' => 'item.id',':index' => 'item.id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width:96px;height:96px;object-fit:cover;border-radius:8px;',':src' => 'item.base_image.small_image_url',':alt' => 'item.name','width' => '96','height' => '96',':key' => 'item.id',':index' => 'item.id']); ?>
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

                                        <?php echo view_render_event('frooxi.shop.checkout.cart.item_image.after'); ?>


                                        
                                        <div style="flex:1;min-width:0;">
                                            <?php echo view_render_event('frooxi.shop.checkout.cart.item_name.before'); ?>


                                            <a :href="'<?php echo e(route('shop.product_or_category.index', ':slug')); ?>'.replace(':slug', item.product_url_key)" style="text-decoration:none;">
                                                <p style="font-family:'Montserrat',sans-serif;font-size:14px;font-weight:600;color:#111;margin:0 0 6px;letter-spacing:.02em;">
                                                    {{ item.name }}
                                                </p>
                                            </a>

                                            <?php echo view_render_event('frooxi.shop.checkout.cart.item_name.after'); ?>

                                            <?php echo view_render_event('frooxi.shop.checkout.cart.item_details.before'); ?>


                                            
                                            <div v-if="item.options.length" style="margin-bottom:10px;">
                                                <p
                                                    style="display:flex;align-items:center;gap:6px;cursor:pointer;font-family:'Montserrat',sans-serif;font-size:11px;letter-spacing:.08em;text-transform:uppercase;color:#6b7280;"
                                                    @click="item.option_show = ! item.option_show"
                                                >
                                                    <?php echo app('translator')->get('shop::app.checkout.cart.index.see-details'); ?>
                                                    <span class="text-lg" :class="{'icon-arrow-up': item.option_show, 'icon-arrow-down': ! item.option_show}"></span>
                                                </p>

                                                <div v-show="item.option_show" style="margin-top:6px;">
                                                    <template v-for="attribute in item.options">
                                                        <div style="display:flex;gap:8px;margin-bottom:3px;">
                                                            <p style="font-size:12px;color:#9ca3af;font-family:'Montserrat',sans-serif;">{{ attribute.attribute_name }}:</p>
                                                            <p style="font-size:12px;color:#374151;font-family:'Montserrat',sans-serif;">
                                                                <template v-if="attribute?.attribute_type === 'file'">
                                                                    <a :href="attribute.file_url" style="color:#111;font-weight:600;" target="_blank" :download="attribute.file_name">{{ attribute.file_name }}</a>
                                                                </template>
                                                                <template v-else>{{ attribute.option_label }}</template>
                                                            </p>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>

                                            <?php echo view_render_event('frooxi.shop.checkout.cart.item_details.after'); ?>

                                            <?php echo view_render_event('frooxi.shop.checkout.cart.quantity_changer.before'); ?>


                                            
                                            <div style="display:flex;align-items:center;gap:16px;margin-top:12px;">
                                                <?php if (isset($component)) { $__componentOriginal6c50a43d549a14cd17ba26b5e08aa48c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6c50a43d549a14cd17ba26b5e08aa48c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.quantity-changer.index','data' => ['vIf' => 'item.can_change_qty','class' => 'flex max-w-max items-center gap-x-2.5 rounded-[5px] border border-zinc-300 px-3.5 py-1.5','name' => 'quantity',':value' => 'item?.quantity','@change' => 'setItemQuantity(item.id, $event)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::quantity-changer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-if' => 'item.can_change_qty','class' => 'flex max-w-max items-center gap-x-2.5 rounded-[5px] border border-zinc-300 px-3.5 py-1.5','name' => 'quantity',':value' => 'item?.quantity','@change' => 'setItemQuantity(item.id, $event)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6c50a43d549a14cd17ba26b5e08aa48c)): ?>
<?php $attributes = $__attributesOriginal6c50a43d549a14cd17ba26b5e08aa48c; ?>
<?php unset($__attributesOriginal6c50a43d549a14cd17ba26b5e08aa48c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6c50a43d549a14cd17ba26b5e08aa48c)): ?>
<?php $component = $__componentOriginal6c50a43d549a14cd17ba26b5e08aa48c; ?>
<?php unset($__componentOriginal6c50a43d549a14cd17ba26b5e08aa48c); ?>
<?php endif; ?>

                                                <span
                                                    style="cursor:pointer;font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:#ef4444;"
                                                    role="button"
                                                    tabindex="0"
                                                    @click="removeItem(item.id)"
                                                >
                                                    <?php echo app('translator')->get('shop::app.checkout.cart.index.remove'); ?>
                                                </span>
                                            </div>

                                            <?php echo view_render_event('frooxi.shop.checkout.cart.quantity_changer.after'); ?>

                                        </div>
                                    </div>

                                    
                                    <div style="text-align:right;flex-shrink:0;">
                                        <?php echo view_render_event('frooxi.shop.checkout.cart.total.before'); ?>


                                        <p style="font-family:'Montserrat',sans-serif;font-size:16px;font-weight:700;color:#111;">{{ item.formatted_total }}</p>

                                        <?php echo view_render_event('frooxi.shop.checkout.cart.total.after'); ?>

                                        <?php echo view_render_event('frooxi.shop.checkout.cart.remove_button.before'); ?>

                                        <?php echo view_render_event('frooxi.shop.checkout.cart.remove_button.after'); ?>

                                    </div>
                                </div>
                            </div>

                            <?php echo view_render_event('frooxi.shop.checkout.cart.item.listing.after'); ?>

                            <?php echo view_render_event('frooxi.shop.checkout.cart.controls.before'); ?>


                            
                            <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;">
                                <?php echo view_render_event('frooxi.shop.checkout.cart.continue_shopping.before'); ?>


                                <a
                                    href="<?php echo e(route('shop.home.index')); ?>"
                                    style="font-family:'Montserrat',sans-serif;font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:#6b7280;text-decoration:none;display:flex;align-items:center;gap:6px;"
                                >
                                    <span class="icon-arrow-left text-lg"></span>
                                    <?php echo app('translator')->get('shop::app.checkout.cart.index.continue-shopping'); ?>
                                </a>

                                <?php echo view_render_event('frooxi.shop.checkout.cart.continue_shopping.after'); ?>

                                <?php echo view_render_event('frooxi.shop.checkout.cart.update_cart.before'); ?>


                                <?php if (isset($component)) { $__componentOriginal30786825665921390a816ebee82cf580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30786825665921390a816ebee82cf580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.button.index','data' => ['style' => 'height:44px;background:#111;color:#fff;border:none;border-radius:8px;font-family:\'Montserrat\',sans-serif;font-size:11px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;padding:0 28px;cursor:pointer;','title' => trans('shop::app.checkout.cart.index.update-cart'),':loading' => 'isStoring',':disabled' => 'isStoring','@click' => 'update()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'height:44px;background:#111;color:#fff;border:none;border-radius:8px;font-family:\'Montserrat\',sans-serif;font-size:11px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;padding:0 28px;cursor:pointer;','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.checkout.cart.index.update-cart')),':loading' => 'isStoring',':disabled' => 'isStoring','@click' => 'update()']); ?>
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

                                <?php echo view_render_event('frooxi.shop.checkout.cart.update_cart.after'); ?>

                            </div>

                            <?php echo view_render_event('frooxi.shop.checkout.cart.controls.after'); ?>

                        </div>

                        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.before'); ?>


                        <!-- Cart Summary Blade File -->
                        <?php echo $__env->make('shop::checkout.cart.summary', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.after'); ?>

                    </div>

                    
                    <div
                        style="display:flex;flex-direction:column;align-items:center;justify-content:center;padding:80px 24px;text-align:center;"
                        v-else
                    >
                        <img
                            src="<?php echo e(frooxi_asset('images/thank-you.png')); ?>"
                            alt="<?php echo app('translator')->get('shop::app.checkout.cart.index.empty-product'); ?>"
                            style="height:120px;width:auto;margin-bottom:24px;opacity:.7;"
                            loading="lazy"
                            decoding="async"
                        />
                        <p style="font-family:'Montserrat',sans-serif;font-size:18px;font-weight:500;color:#111;letter-spacing:.04em;text-transform:uppercase;margin:0 0 8px;" role="heading">
                            <?php echo app('translator')->get('shop::app.checkout.cart.index.empty-product'); ?>
                        </p>
                        <a href="<?php echo e(route('shop.home.index')); ?>" style="margin-top:20px;display:inline-block;height:44px;line-height:44px;padding:0 32px;background:#111;color:#fff;border-radius:8px;font-family:'Montserrat',sans-serif;font-size:11px;font-weight:600;letter-spacing:.18em;text-transform:uppercase;text-decoration:none;">
                            Continue Shopping
                        </a>
                    </div>
                </template>
            </div>
        </script>

        <script type="module">
            app.component("v-cart", {
                template: '#v-cart-template',

                data() {
                    return  {
                        cart: [],

                        allSelected: false,

                        applied: {
                            quantity: {},
                        },

                        isLoading: true,

                        isStoring: false,
                    }
                },

                mounted() {
                    this.getCart();
                },

                computed: {
                    selectedItemsCount() {
                        return this.cart.items.filter(item => item.selected).length;
                    },
                },

                methods: {
                    getCart() {
                        this.$axios.get('<?php echo e(route('shop.api.checkout.cart.index')); ?>')
                            .then(response => {
                                this.cart = response.data.data;

                                this.isLoading = false;

                                if (response.data.message) {
                                    this.$emitter.emit('add-flash', { type: 'info', message: response.data.message });
                                }
                            })
                            .catch(error => {});
                    },

                    setCart(cart) {
                        this.cart = cart;
                    },

                    selectAll() {
                        for (let item of this.cart.items) {
                            item.selected = this.allSelected;
                        }
                    },

                    updateAllSelected() {
                        this.allSelected = this.cart.items.every(item => item.selected);
                    },

                    update() {
                        this.isStoring = true;

                        this.$axios.put('<?php echo e(route('shop.api.checkout.cart.update')); ?>', { qty: this.applied.quantity })
                            .then(response => {
                                if (response.data.message) {
                                    this.cart = response.data.data;

                                    this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                                } else {
                                    this.$emitter.emit('add-flash', { type: 'warning', message: response.data.data.message });
                                }

                                this.isStoring = false;

                            })
                            .catch(error => {
                                this.isStoring = false;
                            });
                    },

                    setItemQuantity(itemId, quantity) {
                        this.applied.quantity[itemId] = quantity;
                    },

                    removeItem(itemId) {
                        this.$emitter.emit('open-confirm-modal', {
                            agree: () => {
                                this.$axios.post('<?php echo e(route('shop.api.checkout.cart.destroy')); ?>', {
                                        '_method': 'DELETE',
                                        'cart_item_id': itemId,
                                    })
                                    .then(response => {
                                        this.cart = response.data.data;

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                                    })
                                    .catch(error => {});
                            }
                        });
                    },

                    removeSelectedItems() {
                        this.$emitter.emit('open-confirm-modal', {
                            agree: () => {
                                const selectedItemsIds = this.cart.items.flatMap(item => item.selected ? item.id : []);

                                this.$axios.post('<?php echo e(route('shop.api.checkout.cart.destroy_selected')); ?>', {
                                        '_method': 'DELETE',
                                        'ids': selectedItemsIds,
                                    })
                                    .then(response => {
                                        this.cart = response.data.data;

                                        this.$emitter.emit('update-mini-cart', response.data.data );

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                                    })
                                    .catch(error => {});
                            }
                        });
                    },

                    moveToWishlistSelectedItems() {
                        this.$emitter.emit('open-confirm-modal', {
                            agree: () => {
                                const selectedItemsIds = this.cart.items.flatMap(item => item.selected ? item.id : []);

                                const selectedItemsQty = this.cart.items.filter(item => item.selected).map(item => this.applied.quantity[item.id] ?? item.quantity);

                                this.$axios.post('<?php echo e(route('shop.api.checkout.cart.move_to_wishlist')); ?>', {
                                        'ids': selectedItemsIds,
                                        'qty': selectedItemsQty
                                    })
                                    .then(response => {
                                        this.cart = response.data.data;

                                        this.$emitter.emit('update-mini-cart', response.data.data );

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                                    })
                                    .catch(error => {});
                            }
                        });
                    },
                }
            });
        </script>
    <?php $__env->stopPush(); endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2643b7d197f48caff2f606750db81304)): ?>
<?php $attributes = $__attributesOriginal2643b7d197f48caff2f606750db81304; ?>
<?php unset($__attributesOriginal2643b7d197f48caff2f606750db81304); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2643b7d197f48caff2f606750db81304)): ?>
<?php $component = $__componentOriginal2643b7d197f48caff2f606750db81304; ?>
<?php unset($__componentOriginal2643b7d197f48caff2f606750db81304); ?>
<?php endif; ?>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/cart/index.blade.php ENDPATH**/ ?>