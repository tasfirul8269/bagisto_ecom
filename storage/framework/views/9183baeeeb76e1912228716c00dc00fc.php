<?php if($product->type == 'booking'): ?>

    <?php
        $bookingProduct = $product->booking_products()->first();
    ?>
    
    <?php echo view_render_event('frooxi.shop.products.view.booking.before', ['product' => $product]); ?>


    <v-booking-information></v-booking-information>

    <?php echo view_render_event('frooxi.shop.products.view.booking.before', ['product' => $product]); ?>


    <?php if (! $__env->hasRenderedOnce('f5418570-cdce-4f01-8a67-63254220431c')): $__env->markAsRenderedOnce('f5418570-cdce-4f01-8a67-63254220431c');
$__env->startPush('scripts'); ?>
        <script
            type="text/x-template"
            id="v-booking-information-template"
        >
            <div class="mt-6 grid w-full max-w-[470px] grid-cols-1 gap-6">
                <?php if($bookingProduct->location): ?>
                    <div class="flex gap-4">
                        <span class="icon-location text-2xl"></span>

                        <div class="grid grid-cols-1 gap-1.5 text-sm font-medium">
                            <p>
                                <?php echo app('translator')->get('shop::app.products.view.type.booking.location'); ?>
                            </p>

                            <div class="grid grid-cols-1 gap-3">
                                <p
                                    class="text-[#6E6E6E]"
                                    v-pre
                                >
                                    <?php echo e($bookingProduct->location); ?>

                                </p>

                                <a
                                    href="https://maps.google.com/maps?q=<?php echo e($bookingProduct->location); ?>"
                                    target="_blank"
                                    class="w-fit text-blue-600 hover:text-blue-800"
                                >
                                    <?php echo app('translator')->get('shop::app.products.view.type.booking.view-on-map'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="w-full max-w-[470px]">
                    <?php echo $__env->make('shop::products.view.types.booking.' . $bookingProduct->type, ['bookingProduct' => $bookingProduct], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </script>

        <script type="module">
            app.component('v-booking-information', {
                template: '#v-booking-information-template',

            });
        </script>
    <?php $__env->stopPush(); endif; ?>
<?php endif; ?>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/products/view/types/booking.blade.php ENDPATH**/ ?>