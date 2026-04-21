<?php
    $channel = core()->getCurrentChannel();
?>

<!-- SEO Meta Content -->
<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($channel->home_seo['meta_title'] ?? ''); ?>" />
    <meta name="description" content="<?php echo e($channel->home_seo['meta_description'] ?? ''); ?>" />
    <meta name="keywords" content="<?php echo e($channel->home_seo['meta_keywords'] ?? ''); ?>" />
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal2643b7d197f48caff2f606750db81304 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2643b7d197f48caff2f606750db81304 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => ['hasHeader' => true,'hasFeature' => false,'hasFooter' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['has-header' => true,'has-feature' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'has-footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
    <!-- Page Title -->
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($channel->home_seo['meta_title'] ?? ''); ?>

     <?php $__env->endSlot(); ?>

    <!-- Start of New Frontend Rebuild -->
    <div class="relative bg-black">

        <!-- Fullscreen Hero Carousel Section -->
        <div class="h-screen bg-neutral-900 mobile-hero-section" style="width:100%;max-width:100%;overflow:hidden;">
            <?php if($heroSlides->count()): ?>
                <?php if (isset($component)) { $__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.carousel.index','data' => ['options' => ['images' => $heroSlides],'ariaLabel' => ''.e(trans('shop::app.home.index.image-carousel')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['images' => $heroSlides]),'aria-label' => ''.e(trans('shop::app.home.index.image-carousel')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce)): ?>
<?php $attributes = $__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce; ?>
<?php unset($__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce)): ?>
<?php $component = $__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce; ?>
<?php unset($__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce); ?>
<?php endif; ?>
            <?php else: ?>
                <!-- Empty State Placeholder for Developers -->
                <div class="flex h-full w-full flex-col items-center justify-center text-center text-white p-10">
                    <h1 class="mb-4 text-4xl font-bold md:text-6xl">Your New Homepage</h1>
                    <p class="max-w-md text-lg text-gray-400">
                        Please add slides in
                        <span class="rounded bg-white/10 px-2 py-1 font-mono text-white">Admin &gt; Storefront &gt; Hero Carousel</span>
                        to populate this section.
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Category Tabs Section -->
        <?php if (isset($component)) { $__componentOriginal9803da450cc1ca311c2285a62285e352 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9803da450cc1ca311c2285a62285e352 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.categories.category-tabs','data' => ['categories' => $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::categories.category-tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9803da450cc1ca311c2285a62285e352)): ?>
<?php $attributes = $__attributesOriginal9803da450cc1ca311c2285a62285e352; ?>
<?php unset($__attributesOriginal9803da450cc1ca311c2285a62285e352); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9803da450cc1ca311c2285a62285e352)): ?>
<?php $component = $__componentOriginal9803da450cc1ca311c2285a62285e352; ?>
<?php unset($__componentOriginal9803da450cc1ca311c2285a62285e352); ?>
<?php endif; ?>

    </div>

    <?php $__env->startPush('styles'); ?>
        <style>
            /* Adjust Mini Cart Appearance specifically for this header */
            .mini-cart-wrapper .icon-cart {
                font-size: 1.5rem !important;
                color: white !important;
            }
            .mini-cart-wrapper .bg-navyBlue {
                background-color: white !important;
                color: black !important;
            }

            /* Ensure Carousel fills full screen correctly */
            .sh-carousel-container {
                height: 100vh !important;
                width: 100vw !important;
                position: absolute;
                top: 0;
                left: 0;
            }

            /* Mobile hero section - 75vh */
            @media (max-width: 768px) {
                .mobile-hero-section {
                    height: 75vh !important;
                }
                .mobile-hero-section .hero-carousel {
                    height: 75vh !important;
                }
                .mobile-hero-section .sh-carousel-container {
                    height: 75vh !important;
                }
            }
        </style>
    <?php $__env->stopPush(); ?>

    
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
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/home/index.blade.php ENDPATH**/ ?>