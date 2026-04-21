<?php echo view_render_event('frooxi.shop.checkout.onepage.address.guest.before'); ?>


<!-- Guest Address Vue Component -->
<v-checkout-address-guest
    :cart="cart"
    @processing="stepForward"
    @processed="stepProcessed"
></v-checkout-address-guest>

<?php echo view_render_event('frooxi.shop.checkout.onepage.address.guest.after'); ?>


<?php echo $__env->make('shop::checkout.onepage.address.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php if (! $__env->hasRenderedOnce('d7b95afa-e61c-4371-9550-cd7c6e741618')): $__env->markAsRenderedOnce('d7b95afa-e61c-4371-9550-cd7c6e741618');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-checkout-address-guest-template"
    >
        <!-- Address Form -->
        <?php if (isset($component)) { $__componentOriginal4d3fcee3e355fb6c8889181b04f357cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.index','data' => ['vSlot' => '{ meta, errors, handleSubmit }','as' => 'div']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-slot' => '{ meta, errors, handleSubmit }','as' => 'div']); ?>
            <form @submit="handleSubmit($event, addAddress)">
                <!-- Guest Billing Address -->
                <div class="mb-4">
                    <?php echo view_render_event('frooxi.shop.checkout.onepage.address.guest.billing.before'); ?>


                    <!-- Billing Address Header -->
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-medium max-md:text-lg max-sm:text-base">
                            <?php echo app('translator')->get('shop::app.checkout.onepage.address.billing-address'); ?>
                        </h2>
                    </div>
                
                    <!-- Billing Address Form -->
                    <v-checkout-address-form
                        control-name="billing"
                        :address="cart.billing_address || undefined"
                    ></v-checkout-address-form>

                    <!-- Use for Shipping Checkbox -->
                    <?php if (isset($component)) { $__componentOriginal578beb4bb944f523450535628cf00b41 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal578beb4bb944f523450535628cf00b41 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.index','data' => ['class' => '!mb-0 flex items-center gap-2.5','vIf' => 'cart.have_stockable_items']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!mb-0 flex items-center gap-2.5','v-if' => 'cart.have_stockable_items']); ?>
                        <?php if (isset($component)) { $__componentOriginal03b54b937596232babb8a12a8847d013 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03b54b937596232babb8a12a8847d013 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.control-group.control','data' => ['type' => 'checkbox','name' => 'billing.use_for_shipping','id' => 'use_for_shipping','for' => 'use_for_shipping','value' => '1','@change' => 'useBillingAddressForShipping = ! useBillingAddressForShipping',':checked' => '!! useBillingAddressForShipping']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'checkbox','name' => 'billing.use_for_shipping','id' => 'use_for_shipping','for' => 'use_for_shipping','value' => '1','@change' => 'useBillingAddressForShipping = ! useBillingAddressForShipping',':checked' => '!! useBillingAddressForShipping']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03b54b937596232babb8a12a8847d013)): ?>
<?php $attributes = $__attributesOriginal03b54b937596232babb8a12a8847d013; ?>
<?php unset($__attributesOriginal03b54b937596232babb8a12a8847d013); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03b54b937596232babb8a12a8847d013)): ?>
<?php $component = $__componentOriginal03b54b937596232babb8a12a8847d013; ?>
<?php unset($__componentOriginal03b54b937596232babb8a12a8847d013); ?>
<?php endif; ?>

                        <label
                            class="cursor-pointer select-none text-base text-zinc-500 max-md:text-sm max-sm:text-xs ltr:pl-0 rtl:pr-0"
                            for="use_for_shipping"
                        >
                            <?php echo app('translator')->get('shop::app.checkout.onepage.address.same-as-billing'); ?>
                        </label>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal578beb4bb944f523450535628cf00b41)): ?>
<?php $attributes = $__attributesOriginal578beb4bb944f523450535628cf00b41; ?>
<?php unset($__attributesOriginal578beb4bb944f523450535628cf00b41); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal578beb4bb944f523450535628cf00b41)): ?>
<?php $component = $__componentOriginal578beb4bb944f523450535628cf00b41; ?>
<?php unset($__componentOriginal578beb4bb944f523450535628cf00b41); ?>
<?php endif; ?>

                    <?php echo view_render_event('frooxi.shop.checkout.onepage.address.guest.billing.after'); ?>

                </div>

                <!-- Guest Shipping Address -->
                <template v-if="cart.have_stockable_items">
                    <div
                        class="mt-8"
                        v-if="! useBillingAddressForShipping"
                    >
                        <?php echo view_render_event('frooxi.shop.checkout.onepage.address.guest.shipping.before'); ?>


                        <!-- Shipping Address Header -->
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-medium max-md:text-lg max-sm:text-base">
                                <?php echo app('translator')->get('shop::app.checkout.onepage.address.shipping-address'); ?>
                            </h2>
                        </div>
                    
                        <!-- Shipping Address Form -->
                        <v-checkout-address-form
                            control-name="shipping"
                            :address="cart.shipping_address || undefined"
                        ></v-checkout-address-form>

                        <?php echo view_render_event('frooxi.shop.checkout.onepage.address.guest.shipping.after'); ?>

                    </div>
                </template>

                <!-- Proceed Button -->
                <div class="mt-4 flex justify-end">
                    <?php if (isset($component)) { $__componentOriginal30786825665921390a816ebee82cf580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30786825665921390a816ebee82cf580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.button.index','data' => ['class' => 'primary-button rounded-[5px] bg-black px-8 py-3 text-sm font-medium text-white max-md:w-full max-md:max-w-full max-sm:py-2','title' => trans('shop::app.checkout.onepage.address.proceed'),':loading' => 'isStoring',':disabled' => 'isStoring']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'primary-button rounded-[5px] bg-black px-8 py-3 text-sm font-medium text-white max-md:w-full max-md:max-w-full max-sm:py-2','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.checkout.onepage.address.proceed')),':loading' => 'isStoring',':disabled' => 'isStoring']); ?>
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
                </div>
            </form>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc)): ?>
<?php $attributes = $__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc; ?>
<?php unset($__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d3fcee3e355fb6c8889181b04f357cc)): ?>
<?php $component = $__componentOriginal4d3fcee3e355fb6c8889181b04f357cc; ?>
<?php unset($__componentOriginal4d3fcee3e355fb6c8889181b04f357cc); ?>
<?php endif; ?>
    </script>

    <script type="module">
        app.component('v-checkout-address-guest', {
            template: '#v-checkout-address-guest-template',

            props: ['cart'],

            emits: ['processing', 'processed'],

            data() {
                return {
                    useBillingAddressForShipping: true,

                    isStoring: false,
                }
            },

            created() {
                if (this.cart.billing_address) {
                    this.useBillingAddressForShipping = this.cart.billing_address.use_for_shipping;
                }
            },

            methods: {
                addAddress(params, { setErrors }) {
                    this.isStoring = true;

                    params['billing']['use_for_shipping'] = this.useBillingAddressForShipping;

                    this.moveToNextStep();

                    this.$axios.post('<?php echo e(route('shop.checkout.onepage.addresses.store')); ?>', params)
                        .then((response) => {
                            this.isStoring = false;

                            if (response.data.data.redirect_url) {
                                window.location.href = response.data.data.redirect_url;
                            } else {
                                if (this.cart.have_stockable_items) {
                                    this.$emit('processed', response.data.data.shippingMethods);
                                } else {
                                    this.$emit('processed', response.data.data.payment_methods);
                                }
                            }
                        })
                        .catch(error => {
                            this.isStoring = false;

                            this.$emit('processing', 'address');

                            if (error.response.status == 422) {
                                setErrors(error.response.data.errors);
                            }
                        });
                },

                moveToNextStep() {
                    if (this.cart.have_stockable_items) {
                        this.$emit('processing', 'shipping');
                    } else {
                        this.$emit('processing', 'payment');
                    }
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/onepage/address/guest.blade.php ENDPATH**/ ?>