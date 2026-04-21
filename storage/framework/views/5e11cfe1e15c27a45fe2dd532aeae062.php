
<div style="display:grid;grid-template-columns:1fr auto 1fr;align-items:center;gap:16px;padding:24px 16px 16px;background:transparent;">
    <!-- Left: Hamburger -->
    <div style="display:flex;align-items:center;justify-self:start;">
        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.drawer.before'); ?>


        <!-- Drawer -->
        <v-mobile-drawer></v-mobile-drawer>

        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.drawer.after'); ?>

    </div>

    <!-- Center: Logo -->
    <div style="display:flex;justify-content:center;">
        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.logo.before'); ?>


        <a
            href="<?php echo e(route('shop.home.index')); ?>"
            style="display:flex;align-items:center;"
            aria-label="<?php echo e(config('app.name')); ?>"
        >
            <img
                src="<?php echo e(request()->routeIs('shop.home.index') ? asset('themes/shop/logo.png') : asset('themes/shop/logo-gold.png')); ?>"
                alt="<?php echo e(config('app.name')); ?>"
                width="100"
                height="auto"
                class="logo-image"
                style="max-height:40px;width:auto;"
            >
        </a>

        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.logo.after'); ?>

    </div>

    <!-- Right: Search + Mini-Cart -->
    <div style="display:flex;align-items:center;gap:16px;justify-self:end;">
        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.search.before'); ?>


        <v-search-toggle></v-search-toggle>

        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.search.after'); ?>


        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.mini_cart.before'); ?>


        <?php if(core()->getConfigData('sales.checkout.shopping_cart.cart_page')): ?>
            <?php echo $__env->make('shop::checkout.cart.mini-cart', ['iconClass' => 'header-icon', 'iconColor' => request()->routeIs('shop.home.index') ? '#ffffff' : '#1a1a1a'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>

        <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.mini_cart.after'); ?>

    </div>
</div>

<?php if (! $__env->hasRenderedOnce('7890f8de-880a-45e9-bebe-6595500fcd71')): $__env->markAsRenderedOnce('7890f8de-880a-45e9-bebe-6595500fcd71');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-mobile-drawer-template">
            <?php if (isset($component)) { $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.drawer.index','data' => ['position' => 'left','width' => '100%','@close' => 'onDrawerClose']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','width' => '100%','@close' => 'onDrawerClose']); ?>
                 <?php $__env->slot('toggle', null, []); ?> 
                    <span class="text-2xl cursor-pointer icon-hamburger header-icon" style="color: <?php echo e(request()->routeIs('shop.home.index') ? '#ffffff' : '#1a1a1a'); ?> !important;"></span>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('header', null, ['class' => 'mobile-drawer-header','style' => 'background-color: #fff !important; color: #000 !important; display:flex; align-items:center; min-height:60px;']); ?> 
                    <div class="flex items-center justify-between">
                        <a href="<?php echo e(route('shop.home.index')); ?>">
                            <img
                                src="<?php echo e(asset('themes/shop/logo-gold.png')); ?>"
                                alt="<?php echo e(config('app.name')); ?>"
                                width="60"
                                height="auto"
                            >
                        </a>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, ['class' => '!p-0']); ?> 
                    <!-- Account Profile Hero Section -->
                    <div class="p-4 border-b border-zinc-200">
                        <div class="grid grid-cols-[auto_1fr] items-center gap-4 rounded-xl border border-zinc-200 p-2.5">
                            <div>
                                <img
                                src="<?php echo e(auth()->user()?->image_url ??  frooxi_asset('images/user-placeholder.png')); ?>"
                                    class="h-[60px] w-[60px] rounded-full max-md:rounded-full"
                                >
                            </div>

                            <?php if(auth()->guard('customer')->guest()): ?>
                                <a
                                    href="<?php echo e(route('shop.customer.session.create')); ?>"
                                    class="flex text-base font-medium"
                                >
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.mobile.login'); ?>

                                    <i class="icon-double-arrow text-2xl ltr:ml-2.5 rtl:mr-2.5"></i>
                                </a>
                            <?php endif; ?>

                            <?php if(auth()->guard('customer')->check()): ?>
                                <div
                                    class="flex flex-col justify-between gap-2.5 max-md:gap-0"
                                    v-pre
                                >
                                    <p class="text-2xl break-all font-mediums max-md:text-xl">Hello! <?php echo e(auth()->user()?->first_name); ?></p>

                                    <p class="no-underline text-zinc-500 max-md:text-sm"><?php echo e(auth()->user()?->email); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.drawer.categories.before'); ?>


                    <!-- Mobile category view -->
                    <v-mobile-category ref="mobileCategory"></v-mobile-category>

                    <?php echo view_render_event('frooxi.shop.components.layouts.header.mobile.drawer.categories.after'); ?>


                    <!-- Flash Sale Link -->
                    <div class="border-t border-zinc-200">
                        <a
                            href="<?php echo e(route('shop.flash-sale.index')); ?>"
                            class="flex items-center justify-between px-6 py-4 transition-colors duration-200 hover:bg-gray-50"
                        >
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                                </svg>
                                <span class="text-base font-medium text-black">Flash Sale</span>
                            </div>
                            <span class="icon-arrow-right rtl:icon-arrow-left text-lg"></span>
                        </a>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('footer', null, []); ?> 
                    <!-- Localization & Currency Section -->
                <?php if(core()->getCurrentChannel()->locales()->count() > 1 || core()->getCurrentChannel()->currencies()->count() > 1 ): ?>
                                    <div class="fixed bottom-0 z-[1100] grid w-full max-w-full grid-cols-[1fr_auto_1fr] items-center justify-items-center border-t border-zinc-200 bg-white px-5 ltr:left-0 rtl:right-0">
                                        <!-- Filter Drawer -->
                                        <?php if (isset($component)) { $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.drawer.index','data' => ['position' => 'bottom','width' => '100%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom','width' => '100%']); ?>
                                            <!-- Drawer Toggler -->
                                             <?php $__env->slot('toggle', null, []); ?> 
                                                <div
                                                    class="flex cursor-pointer items-center gap-x-2.5 px-2.5 py-3.5 text-lg font-medium uppercase max-md:py-3 max-sm:text-base"
                                                    role="button"
                                                    v-pre
                                                >
                                                    <?php echo e(core()->getCurrentCurrency()->symbol . ' ' . core()->getCurrentCurrencyCode()); ?>

                                                </div>
                                             <?php $__env->endSlot(); ?>

                                            <!-- Drawer Header -->
                                             <?php $__env->slot('header', null, []); ?> 
                                                <div class="flex items-center justify-between">
                                                    <p class="text-lg font-semibold">
                                                        <?php echo app('translator')->get('shop::app.components.layouts.header.mobile.currencies'); ?>
                                                    </p>
                                                </div>
                                             <?php $__env->endSlot(); ?>

                                            <!-- Drawer Content -->
                                             <?php $__env->slot('content', null, ['class' => '!px-0']); ?> 
                                                <div
                                                    class="overflow-auto"
                                                    :style="{ height: getCurrentScreenHeight }"
                                                >
                                                    <v-currency-switcher></v-currency-switcher>
                                                </div>
                                             <?php $__env->endSlot(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $attributes = $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $component = $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>

                                        <!-- Seperator -->
                                        <span class="h-5 w-0.5 bg-zinc-200"></span>

                                        <!-- Sort Drawer -->
                                        <?php if (isset($component)) { $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.drawer.index','data' => ['position' => 'bottom','width' => '100%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom','width' => '100%']); ?>
                                            <!-- Drawer Toggler -->
                                             <?php $__env->slot('toggle', null, []); ?> 
                                                <div
                                                    class="flex cursor-pointer items-center gap-x-2.5 px-2.5 py-3.5 text-lg font-medium uppercase max-md:py-3 max-sm:text-base"
                                                    role="button"
                                                    v-pre
                                                >
                                                    <img
                                        src="<?php echo e(! empty(core()->getCurrentLocale()->logo_url)
                        ? core()->getCurrentLocale()->logo_url
                        : frooxi_asset('images/default-language.svg')); ?>"
                                                        class="h-full"
                                                        alt="Default locale"
                                                        width="24"
                                                        height="16"
                                                    />

                                                    <?php echo e(core()->getCurrentChannel()->locales()->orderBy('name')->where('code', app()->getLocale())->value('name')); ?>

                                                </div>
                                             <?php $__env->endSlot(); ?>

                                            <!-- Drawer Header -->
                                             <?php $__env->slot('header', null, []); ?> 
                                                <div class="flex items-center justify-between">
                                                    <p class="text-lg font-semibold">
                                                        <?php echo app('translator')->get('shop::app.components.layouts.header.mobile.locales'); ?>
                                                    </p>
                                                </div>
                                             <?php $__env->endSlot(); ?>

                                            <!-- Drawer Content -->
                                             <?php $__env->slot('content', null, ['class' => '!px-0']); ?> 
                                                <div
                                                    class="overflow-auto"
                                                    :style="{ height: getCurrentScreenHeight }"
                                                >
                                                    <v-locale-switcher></v-locale-switcher>
                                                </div>
                                             <?php $__env->endSlot(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $attributes = $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $component = $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>
                                    </div>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $attributes = $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $component = $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>
        </script>

    <script
        type="text/x-template"
        id="v-mobile-category-template"
    >
            <!-- Wrapper with transition effects -->
    <div class="relative h-full overflow-hidden">
        <!-- Sliding container -->
            <div
                class="flex h-full transition-transform duration-300"
                :class="{
                        'ltr:translate-x-0 rtl:translate-x-0': currentViewLevel !== 'third',
                        'ltr:-translate-x-full rtl:translate-x-full': currentViewLevel === 'third'
                }"
            >
            <!-- First level view -->
            <div class="flex-shrink-0 w-full h-full px-6 overflow-auto">
                <div class="py-4">
                        <div
                            v-for="category in categories"
                            :key="category.id"
                            :class="{'mb-2': category.children && category.children.length}"
                        >
                        <div
                            class="flex items-center justify-between py-2 transition-colors duration-200 cursor-pointer"
                            @click="category.children && category.children.length ? toggleCategory(category.id) : null"
                        >
                            <a
                                :href="category.children && category.children.length ? 'javascript:void(0)' : category.url"
                                class="text-base font-medium text-black"
                                @click.stop="category.children && category.children.length ? toggleCategory(category.id) : null"
                            >
                                {{ category.name }}
                            </a>

                            <span
                                v-if="category.children && category.children.length"
                                class="transition-transform duration-200"
                                :class="expandedCategories[category.id] ? 'icon-arrow-down' : 'icon-arrow-right'"
                                style="font-size: 18px;"
                            ></span>
                        </div>

                        <!-- Second Level Categories - collapsed by default -->
                            <div
                                v-if="category.children && category.children.length"
                                v-show="expandedCategories[category.id]"
                                class="overflow-hidden"
                            >
                                <div
                                    v-for="secondLevelCategory in category.children"
                                    :key="secondLevelCategory.id"
                                >
                                    <div
                                        class="flex items-center justify-between py-2 pl-4 transition-colors duration-200 cursor-pointer"
                                        @click="showThirdLevel(secondLevelCategory, category, $event)"
                                    >
                                    <a :href="secondLevelCategory.url" class="text-sm font-normal">
                                        {{ secondLevelCategory.name }}
                                    </a>

                                        <span
                                            v-if="secondLevelCategory.children && secondLevelCategory.children.length"
                                            class="icon-arrow-right rtl:icon-arrow-left"
                                        ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third level view -->
                <div
                    class="flex-shrink-0 w-full h-full"
                    v-if="currentViewLevel === 'third'"
                >
                <div class="px-6 py-4 border-b border-gray-200">
                        <button
                            @click="goBackToMainView"
                            class="flex items-center justify-center gap-2 focus:outline-none"
                            aria-label="Go back"
                        >
                        <span class="text-lg icon-arrow-left rtl:icon-arrow-right"></span>
                        <div class="text-base font-medium text-black">
                            <?php echo app('translator')->get('shop::app.components.layouts.header.mobile.back-button'); ?>
                        </div>
                    </button>
                </div>

                <!-- Third Level Content -->
                <div class="px-6 py-4">
                        <div
                            v-for="thirdLevelCategory in currentSecondLevelCategory?.children"
                            :key="thirdLevelCategory.id"
                            class="mb-2"
                        >
                            <a
                                :href="thirdLevelCategory.url"
                                class="block py-2 text-sm transition-colors duration-200"
                            >
                            {{ thirdLevelCategory.name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>

    <script type="module">
        app.component('v-mobile-category', {
            template: '#v-mobile-category-template',

            data() {
                return  {
                    categories: [],
                    currentViewLevel: 'main',
                    currentSecondLevelCategory: null,
                    currentParentCategory: null,
                    expandedCategories: {},
                }
            },

            mounted() {
                this.initCategories();
            },

            computed: {
                getCurrentScreenHeight() {
                    return window.innerHeight - (window.innerWidth < 920 ? 61 : 0) + 'px';
                },
            },

            methods: {
                initCategories() {
                    try {
                        const stored = localStorage.getItem('categories_v2');

                        if (stored) {
                            this.categories = JSON.parse(stored);
                            this.autoExpandFirst();
                            return;
                        }

                    } catch (e) {}

                    this.getCategories();
                },
                getCategories() {
                    this.$axios.get("<?php echo e(route('shop.api.categories.tree')); ?>")
                        .then(response => {
                            this.categories = response.data.data;
                            localStorage.setItem('categories_v2', JSON.stringify(this.categories));
                            this.autoExpandFirst();
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },

                autoExpandFirst() {
                    if (this.categories.length > 0) {
                        const first = this.categories[0];
                        if (first.children && first.children.length) {
                            this.expandedCategories = { [first.id]: true };
                        }
                    }
                },

                showThirdLevel(secondLevelCategory, parentCategory, event) {
                    if (secondLevelCategory.children && secondLevelCategory.children.length) {
                        this.currentSecondLevelCategory = secondLevelCategory;
                        this.currentParentCategory = parentCategory;
                        this.currentViewLevel = 'third';

                        if (event) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                    }
                },

                goBackToMainView() {
                    this.currentViewLevel = 'main';
                },

                toggleCategory(categoryId) {
                    this.expandedCategories = {
                        ...this.expandedCategories,
                        [categoryId]: !this.expandedCategories[categoryId],
                    };
                },
            },
        });

        app.component('v-mobile-drawer', {
            template: '#v-mobile-drawer-template',

            methods: {
                onDrawerClose() {
                    this.$refs.mobileCategory.currentViewLevel = 'main';
                }
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/components/layouts/header/mobile/index.blade.php ENDPATH**/ ?>