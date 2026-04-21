<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'hasHeader'  => true,
    'hasFeature' => true,
    'hasFooter'  => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'hasHeader'  => true,
    'hasFeature' => true,
    'hasFooter'  => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $hideBottomNav = in_array(request()->route()?->getName(), [
        'shop.customer.session.index',
        'shop.customer.session.create',
        'shop.customers.register.index',
        'shop.customers.register.create',
        'shop.customers.register.store',
    ]);
?>

<!DOCTYPE html>

<html
    lang="<?php echo e(app()->getLocale()); ?>"
    dir="<?php echo e(core()->getCurrentLocale()->direction); ?>"
>
    <head>

        <?php echo view_render_event('frooxi.shop.layout.head.before'); ?>


        <title><?php echo e($title ?? ''); ?></title>

        <meta charset="UTF-8">

        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        >
        <meta
            http-equiv="content-language"
            content="<?php echo e(app()->getLocale()); ?>"
        >

        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >
        <meta
            name="csrf-token"
            content="<?php echo e(csrf_token()); ?>"
        >
        <meta
            name="base-url"
            content="<?php echo e(url()->to('/')); ?>"
        >
        <meta
            name="currency"
            content="<?php echo e(core()->getCurrentCurrency()->toJson()); ?>"
        >
        <meta 
            name="generator" 
            content="Frooxi"
        >

        <?php echo $__env->yieldPushContent('meta'); ?>

        <link
            rel="icon"
            type="image/png"
            href="<?php echo e(asset('themes/shop/favicon.png')); ?>"
        />

        <link
            rel="shortcut icon"
            type="image/png"
            href="<?php echo e(asset('themes/shop/favicon.png')); ?>"
        />

        <?php echo themes()->setBagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'])->toHtml(); ?>

        <link
            rel="preconnect"
            href="https://fonts.googleapis.com"
            crossorigin
        />

        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin
        />

        <link
            rel="preload" as="style"
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        />

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        />

        <?php echo $__env->yieldPushContent('styles'); ?>

        <style>
            :root {
                --primary-font: 'Montserrat', sans-serif;
            }

            body, 
            p, 
            h1, 
            h2, 
            h3, 
            h4, 
            h5, 
            h6, 
            span, 
            a, 
            button, 
            input, 
            select, 
            textarea {
                font-family: var(--primary-font) !important;
            }

            html {
                overflow-x: clip;
                max-width: 100%;
            }
            body {
                overflow-x: clip;
                max-width: 100%;
            }

            .nav-link {
                color: #FFFFFF !important;
                font-size: 12px !important;
                font-weight: 400 !important;
                text-transform: uppercase !important;
                font-family: 'Montserrat', sans-serif !important;
                letter-spacing: 1.2px !important;
                text-decoration: none !important;
            }

            @media (max-width: 1023px) {
                #main {
                    padding-bottom: <?php echo e($hideBottomNav ? '0' : 'calc(65px + env(safe-area-inset-bottom))'); ?> !important;
                }

                footer, .footer-wrapper {
                    padding-bottom: <?php echo e($hideBottomNav ? '0' : 'calc(65px + env(safe-area-inset-bottom))'); ?> !important;
                }
            }

            @media (min-width: 1024px) {
                #mobile-bottom-nav { display: none !important; }
                #main { padding-bottom: 0 !important; }
                footer, .footer-wrapper { padding-bottom: 0 !important; }
            }

            <?php echo core()->getConfigData('general.content.custom_scripts.custom_css'); ?>

        </style>

        <?php if(core()->getConfigData('general.content.speculation_rules.enabled')): ?>
            <script type="speculationrules">
                <?php echo json_encode(core()->getSpeculationRules(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE, 512) ?>
            </script>
        <?php endif; ?>
        
        <!-- WhatsApp FAB Styles -->
        <style>
            .whatsapp-fab {
                position: fixed;
                bottom: 24px;
                right: 20px;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background-color: #25D366;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
                z-index: 9999;
                transition: all 0.3s ease;
                cursor: pointer;
                padding: 0;
            }
        
            .whatsapp-fab:hover {
                transform: scale(1.1);
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.4);
            }
        
            .whatsapp-fab img {
                width: 60px;
                height: 60px;
                object-fit: contain;
            }
        
            /* Mobile responsive */
            @media (max-width: 768px) {
                .whatsapp-fab {
                    bottom: 80px;
                    right: 15px;
                    width: 55px;
                    height: 55px;
                }
        
                .whatsapp-fab img {
                    width: 55px;
                    height: 55px;
                }
            }
        </style>

        <?php echo view_render_event('frooxi.shop.layout.head.after'); ?>


    </head>

    <body>
        <?php echo view_render_event('frooxi.shop.layout.body.before'); ?>


        <a
            href="#main"
            class="skip-to-main-content-link"
        >
            Skip to main content
        </a>

        <!-- Built With Frooxi -->
        <div id="app">
            <!-- Flash Message Blade Component -->
            <?php if (isset($component)) { $__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.flash-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::flash-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0)): ?>
<?php $attributes = $__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0; ?>
<?php unset($__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0)): ?>
<?php $component = $__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0; ?>
<?php unset($__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0); ?>
<?php endif; ?>

            <!-- Confirm Modal Blade Component -->
            <?php if (isset($component)) { $__componentOriginal5692e00db184034e913f6f80572595d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5692e00db184034e913f6f80572595d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.modal.confirm','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::modal.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5692e00db184034e913f6f80572595d8)): ?>
<?php $attributes = $__attributesOriginal5692e00db184034e913f6f80572595d8; ?>
<?php unset($__attributesOriginal5692e00db184034e913f6f80572595d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5692e00db184034e913f6f80572595d8)): ?>
<?php $component = $__componentOriginal5692e00db184034e913f6f80572595d8; ?>
<?php unset($__componentOriginal5692e00db184034e913f6f80572595d8); ?>
<?php endif; ?>

            <!-- Page Header Blade Component -->
            <?php if($hasHeader): ?>
                <?php if (isset($component)) { $__componentOriginal8840dbae58ccad6ecf4eb407b99d7661 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661)): ?>
<?php $attributes = $__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661; ?>
<?php unset($__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8840dbae58ccad6ecf4eb407b99d7661)): ?>
<?php $component = $__componentOriginal8840dbae58ccad6ecf4eb407b99d7661; ?>
<?php unset($__componentOriginal8840dbae58ccad6ecf4eb407b99d7661); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(
                core()->getConfigData('general.gdpr.settings.enabled')
                && core()->getConfigData('general.gdpr.cookie.enabled')
            ): ?>
                <?php if (isset($component)) { $__componentOriginalee22104ea56ac769eac5950f83fdb6cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee22104ea56ac769eac5950f83fdb6cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.cookie.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.cookie'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee22104ea56ac769eac5950f83fdb6cf)): ?>
<?php $attributes = $__attributesOriginalee22104ea56ac769eac5950f83fdb6cf; ?>
<?php unset($__attributesOriginalee22104ea56ac769eac5950f83fdb6cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee22104ea56ac769eac5950f83fdb6cf)): ?>
<?php $component = $__componentOriginalee22104ea56ac769eac5950f83fdb6cf; ?>
<?php unset($__componentOriginalee22104ea56ac769eac5950f83fdb6cf); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php echo view_render_event('frooxi.shop.layout.content.before'); ?>


            <!-- Page Content Blade Component -->
            <main id="main">
                <?php echo e($slot); ?>

            </main>

            <?php echo view_render_event('frooxi.shop.layout.content.after'); ?>



            <!-- Page Services Blade Component -->
            <?php if($hasFeature): ?>
                <?php if (isset($component)) { $__componentOriginalc7f3325cf24ae738796526b5a914125a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7f3325cf24ae738796526b5a914125a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.services','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7f3325cf24ae738796526b5a914125a)): ?>
<?php $attributes = $__attributesOriginalc7f3325cf24ae738796526b5a914125a; ?>
<?php unset($__attributesOriginalc7f3325cf24ae738796526b5a914125a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7f3325cf24ae738796526b5a914125a)): ?>
<?php $component = $__componentOriginalc7f3325cf24ae738796526b5a914125a; ?>
<?php unset($__componentOriginalc7f3325cf24ae738796526b5a914125a); ?>
<?php endif; ?>
            <?php endif; ?>

            <!-- Page Footer Blade Component -->
            <?php if($hasFooter): ?>
                <?php if (isset($component)) { $__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.footer.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b)): ?>
<?php $attributes = $__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b; ?>
<?php unset($__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b)): ?>
<?php $component = $__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b; ?>
<?php unset($__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b); ?>
<?php endif; ?>
            <?php endif; ?>

            <!-- Mobile Bottom Navigation -->
            <?php if(! $hideBottomNav): ?>
                <?php if (isset($component)) { $__componentOriginal9be63a15c963fec9a0ea37d0ac7e2c9a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9be63a15c963fec9a0ea37d0ac7e2c9a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.bottom-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.bottom-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9be63a15c963fec9a0ea37d0ac7e2c9a)): ?>
<?php $attributes = $__attributesOriginal9be63a15c963fec9a0ea37d0ac7e2c9a; ?>
<?php unset($__attributesOriginal9be63a15c963fec9a0ea37d0ac7e2c9a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9be63a15c963fec9a0ea37d0ac7e2c9a)): ?>
<?php $component = $__componentOriginal9be63a15c963fec9a0ea37d0ac7e2c9a; ?>
<?php unset($__componentOriginal9be63a15c963fec9a0ea37d0ac7e2c9a); ?>
<?php endif; ?>
            <?php endif; ?>

            <!-- WhatsApp Floating Action Button -->
            <a
                href="https://wa.me/"
                target="_blank"
                rel="noopener noreferrer"
                class="whatsapp-fab"
                aria-label="Chat on WhatsApp"
            >
                <img src="<?php echo e(asset('themes/shop/ic_whatsapp.png')); ?>" alt="WhatsApp" />
            </a>
        </div>

        <?php echo view_render_event('frooxi.shop.layout.body.after'); ?>


        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php echo view_render_event('frooxi.shop.layout.vue-app-mount.before'); ?>

        <script>
            /**
             * Load event, the purpose of using the event is to mount the application
             * after all of our `Vue` components which is present in blade file have
             * been registered in the app. No matter what `app.mount()` should be
             * called in the last.
             */
            window.addEventListener("load", function (event) {
                app.mount("#app");
            });
        </script>

        <?php echo view_render_event('frooxi.shop.layout.vue-app-mount.after'); ?>


        <script type="text/javascript">
            <?php echo core()->getConfigData('general.content.custom_scripts.custom_javascript'); ?>

        </script>
    </body>
</html>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/components/layouts/index.blade.php ENDPATH**/ ?>