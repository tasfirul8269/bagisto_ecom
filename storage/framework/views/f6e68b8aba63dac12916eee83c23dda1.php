<?php
    $admin = auth()->guard('admin')->user();
?>

<header class="sticky top-0 z-[10001] flex items-center justify-between border-b border-gray-100 bg-white px-4 py-3 sm:px-4">
    <div class="flex items-center gap-2 sm:gap-3">
        <!-- Hamburger Menu -->
        <i
            class="icon-menu cursor-pointer rounded-lg p-1.5 text-xl text-gray-500 hover:text-gray-700 hover:bg-gray-100 lg:hidden sm:text-2xl transition-colors"
            @click="$refs.sidebarMenuDrawer.open()"
        >
        </i>

        <!-- Logo -->
        <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="flex-shrink-0">
            <img
                src="<?php echo e(asset('themes/shop/logo-gold.png')); ?>"
                class="h-8 w-auto sm:h-9"
                id="logo-image"
                alt="<?php echo e(config('app.name')); ?>"
            />
        </a>
    </div>

    <div class="flex items-center gap-1.5 sm:gap-2">
        <!-- Visit Shop Link -->
        <a 
            href="<?php echo e(route('shop.home.index')); ?>" 
            target="_blank"
            class="hidden sm:flex items-center gap-1 rounded-lg px-2 py-1.5 text-sm text-gray-500 transition-colors hover:text-[#D4A84B]"
            title="<?php echo app('translator')->get('admin::app.components.layouts.header.visit-shop'); ?>"
        >
            <span class="icon-store text-xl"></span>
        </a>

       <!-- REMOVED: Notification package deleted -->

        <!-- Admin profile -->
        <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => ['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']); ?>
             <?php $__env->slot('toggle', null, []); ?> 
                <?php if($admin->image): ?>
                    <button class="flex h-8 w-8 cursor-pointer overflow-hidden rounded-full hover:opacity-80 focus:opacity-80 sm:h-9 sm:w-9">
                        <img
                            src="<?php echo e($admin->image_url); ?>"
                            class="h-full w-full object-cover"
                        />
                    </button>
                <?php else: ?>
                    <button class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-[#D4A84B] text-xs font-semibold leading-6 text-white transition-all hover:bg-[#B8923F] focus:bg-[#B8923F] focus:ring-2 focus:ring-[#D4A84B] focus:ring-offset-1 focus:outline-none sm:h-9 sm:w-9 sm:text-sm">
                        <?php echo e(substr($admin->name, 0, 1)); ?>

                    </button>
                <?php endif; ?>
             <?php $__env->endSlot(); ?>

            <!-- Admin Dropdown -->
             <?php $__env->slot('content', null, ['class' => '!p-0 rounded-xl border border-gray-100 shadow-lg animate-fade-in']); ?> 
                <div class="flex items-center gap-1.5 border-b border-gray-100 bg-gray-50 px-4 py-2 sm:px-5 sm:py-2.5">
                    <img
                        src="<?php echo e(asset('themes/shop/logo-gold.png')); ?>"
                        class="sm:h-6 sm:w-6"
                        width="20"
                        height="20"
                    />

                    <!-- Version -->
                    <p class="text-xs text-gray-400 sm:text-sm">
                        <?php echo app('translator')->get('admin::app.components.layouts.header.app-version', ['version' => 'v' . core()->version()]); ?>
                    </p>
                </div>

                <div class="grid gap-0.5 py-1.5">
                    <a
                        class="cursor-pointer px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-50 hover:text-[#D4A84B] sm:px-5"
                        href="<?php echo e(route('admin.account.edit')); ?>"
                    >
                        <?php echo app('translator')->get('admin::app.components.layouts.header.my-account'); ?>
                    </a>

                    <!--Admin logout-->
                    <?php if (isset($component)) { $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['method' => 'DELETE','action' => ''.e(route('admin.session.destroy')).'','id' => 'adminLogout']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'DELETE','action' => ''.e(route('admin.session.destroy')).'','id' => 'adminLogout']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $attributes = $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $component = $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>

                    <a
                        class="cursor-pointer px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-50 hover:text-[#D4A84B] sm:px-5"
                        href="<?php echo e(route('admin.session.destroy')); ?>"
                        onclick="event.preventDefault(); document.getElementById('adminLogout').submit();"
                    >
                        <?php echo app('translator')->get('admin::app.components.layouts.header.logout'); ?>
                    </a>
                </div>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2)): ?>
<?php $attributes = $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2; ?>
<?php unset($__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2)): ?>
<?php $component = $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2; ?>
<?php unset($__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2); ?>
<?php endif; ?>
    </div>
</header>

<!-- Menu Sidebar Drawer -->
<?php if (isset($component)) { $__componentOriginal9bfb526197f1d7304e7fade44c26fbb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['position' => 'left','width' => '270px','ref' => 'sidebarMenuDrawer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','width' => '270px','ref' => 'sidebarMenuDrawer']); ?>
    <!-- Drawer Header -->
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex items-center justify-between">
            <img
                src="<?php echo e(asset('themes/shop/logo-gold.png')); ?>"
                class="h-8 w-auto sm:h-10"
                alt="<?php echo e(config('app.name')); ?>"
            />
        </div>
     <?php $__env->endSlot(); ?>

    <!-- Drawer Content -->
     <?php $__env->slot('content', null, ['class' => 'p-3 sm:p-4']); ?> 
        <div class="journal-scroll h-[calc(100vh-100px)] overflow-auto">
            <nav class="grid w-full gap-1.5 sm:gap-2">
                <!-- Navigation Menu -->
                <?php $__currentLoopData = menu()->getItems('admin'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group/item relative">
                        <a
                            href="<?php echo e($menuItem->getUrl()); ?>"
                            class="flex items-center gap-2 p-1.5 cursor-pointer hover:rounded-lg <?php echo e($menuItem->isActive() == 'active' ? 'bg-blue-600 rounded-lg' : ' hover:bg-gray-100 hover:dark:bg-gray-950'); ?> peer sm:gap-2.5"
                        >
                            <span class="<?php echo e($menuItem->getIcon()); ?> text-xl <?php echo e($menuItem->isActive() ? 'text-white' : ''); ?> sm:text-2xl"></span>
                            
                            <p class="font-semibold text-gray-600 dark:text-gray-300 whitespace-nowrap text-sm group-[.sidebar-collapsed]/container:hidden <?php echo e($menuItem->isActive() ? 'text-white' : ''); ?> sm:text-base">
                                <?php echo e($menuItem->getName()); ?>

                            </p>
                        </a>

                        <?php if($menuItem->haveChildren()): ?>
                            <div class="<?php echo e($menuItem->isActive() ? ' !grid bg-gray-100 dark:bg-gray-950' : ''); ?> hidden min-w-[180px] ltr:pl-8 rtl:pr-8 pb-2 rounded-b-lg z-[100] sm:ltr:pl-10 sm:rtl:pr-10">
                                <?php $__currentLoopData = $menuItem->getChildren(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a
                                        href="<?php echo e($subMenuItem->getUrl()); ?>"
                                        class="text-xs text-<?php echo e($subMenuItem->isActive() ? 'blue':'gray'); ?>-600 dark:text-<?php echo e($subMenuItem->isActive() ? 'blue':'gray'); ?>-300 whitespace-nowrap py-1 group-[.sidebar-collapsed]/container:px-4 group-[.sidebar-collapsed]/container:py-2 group-[.inactive]/item:px-4 group-[.inactive]/item:py-2 hover:text-blue-600 dark:hover:bg-gray-950 sm:text-sm sm:group-[.sidebar-collapsed]/container:px-5 sm:group-[.sidebar-collapsed]/container:py-2.5 sm:group-[.inactive]/item:px-5 sm:group-[.inactive]/item:py-2.5"
                                    >
                                        <?php echo e($subMenuItem->getName()); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8)): ?>
<?php $attributes = $__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8; ?>
<?php unset($__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9bfb526197f1d7304e7fade44c26fbb8)): ?>
<?php $component = $__componentOriginal9bfb526197f1d7304e7fade44c26fbb8; ?>
<?php unset($__componentOriginal9bfb526197f1d7304e7fade44c26fbb8); ?>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('b7801bc1-49a1-494a-a0f1-31bffff54d59')): $__env->markAsRenderedOnce('b7801bc1-49a1-494a-a0f1-31bffff54d59');
$__env->startPush('scripts'); ?>
    

    <script
        type="text/x-template"
        id="v-dark-template"
    >
        <div class="flex">
            <span
                class="cursor-pointer rounded-md p-1.5 text-2xl transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                :class="[isDarkMode ? 'icon-light' : 'icon-dark']"
                @click="toggle"
            ></span>
        </div>
    </script>

    <script type="module">
        app.component('v-dark', {
            template: '#v-dark-template',

            data() {
                return {
                    isDarkMode: <?php echo e(request()->cookie('dark_mode') ?? 0); ?>,

                    logo: "<?php echo e(asset('themes/shop/logo-gold.png')); ?>",

                    dark_logo: "<?php echo e(asset('themes/shop/logo-gold.png')); ?>",
                };
            },

            methods: {
                toggle() {
                    this.isDarkMode = parseInt(this.isDarkModeCookie()) ? 0 : 1;

                    var expiryDate = new Date();

                    expiryDate.setMonth(expiryDate.getMonth() + 1);

                    document.cookie = 'dark_mode=' + this.isDarkMode + '; path=/; expires=' + expiryDate.toGMTString();

                    document.documentElement.classList.toggle('dark', this.isDarkMode === 1);

                    if (this.isDarkMode) {
                        this.$emitter.emit('change-theme', 'dark');

                        document.getElementById('logo-image').src = this.dark_logo;
                    } else {
                        this.$emitter.emit('change-theme', 'light');

                        document.getElementById('logo-image').src = this.logo;
                    }
                },

                isDarkModeCookie() {
                    const cookies = document.cookie.split(';');

                    for (const cookie of cookies) {
                        const [name, value] = cookie.trim().split('=');

                        if (name === 'dark_mode') {
                            return value;
                        }
                    }

                    return 0;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Admin/src/resources/views/components/layouts/header/index.blade.php ENDPATH**/ ?>