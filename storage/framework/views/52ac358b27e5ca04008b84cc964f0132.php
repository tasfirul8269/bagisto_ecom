<?php echo view_render_event('frooxi.shop.checkout.onepage.shipping_methods.before'); ?>


<v-shipping-methods
    :methods="shippingMethods"
    @processing="stepForward"
    @processed="stepProcessed"
>
    <!-- Shipping Method Shimmer Effect -->
    <?php if (isset($component)) { $__componentOriginald87fc392b8affb87fbc8104a00c8e1ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.shipping-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.shipping-method'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff)): ?>
<?php $attributes = $__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff; ?>
<?php unset($__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald87fc392b8affb87fbc8104a00c8e1ff)): ?>
<?php $component = $__componentOriginald87fc392b8affb87fbc8104a00c8e1ff; ?>
<?php unset($__componentOriginald87fc392b8affb87fbc8104a00c8e1ff); ?>
<?php endif; ?>
</v-shipping-methods>

<?php echo view_render_event('frooxi.shop.checkout.onepage.shipping_methods.after'); ?>


<?php if (! $__env->hasRenderedOnce('0c2913a4-59e8-4726-b028-c8afbe8748ae')): $__env->markAsRenderedOnce('0c2913a4-59e8-4726-b028-c8afbe8748ae');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-shipping-methods-template"
    >
        <div class="mb-7 max-md:mb-0">
            <template v-if="! methods">
                <!-- Shipping Method Shimmer Effect -->
                <?php if (isset($component)) { $__componentOriginald87fc392b8affb87fbc8104a00c8e1ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.shipping-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.shipping-method'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff)): ?>
<?php $attributes = $__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff; ?>
<?php unset($__attributesOriginald87fc392b8affb87fbc8104a00c8e1ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald87fc392b8affb87fbc8104a00c8e1ff)): ?>
<?php $component = $__componentOriginald87fc392b8affb87fbc8104a00c8e1ff; ?>
<?php unset($__componentOriginald87fc392b8affb87fbc8104a00c8e1ff); ?>
<?php endif; ?>
            </template>

            <template v-else>
                <!-- Themed step card -->
                <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
                    <div style="display:flex;align-items:center;gap:14px;padding:20px 24px;border-bottom:1px solid #f3f4f6;">
                        <div style="width:28px;height:28px;border-radius:50%;background:#111;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <span style="font-family:'Montserrat',sans-serif;font-size:12px;font-weight:700;color:#fff;">2</span>
                        </div>
                        <h2 style="font-family:'Montserrat',sans-serif;font-size:13px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:#111;margin:0;">
                            <?php echo app('translator')->get('shop::app.checkout.onepage.shipping.shipping-method'); ?>
                        </h2>
                    </div>

                    <div style="padding:24px;">
                        <div style="display:flex;flex-wrap:wrap;gap:16px;">
                            <template v-for="method in methods">
                                <?php echo view_render_event('frooxi.shop.checkout.onepage.shipping_method.before'); ?>


                                <div
                                    style="position:relative;flex:1;min-width:200px;max-width:260px;"
                                    v-for="rate in method.rates"
                                >
                                    <input
                                        type="radio"
                                        name="shipping_method"
                                        :id="rate.method"
                                        :value="rate.method"
                                        class="peer hidden"
                                        @change="store(rate.method)"
                                    >

                                    <label
                                        :for="rate.method"
                                        style="display:block;cursor:pointer;border:1.5px solid #e5e7eb;border-radius:10px;padding:16px;transition:border-color .15s;"
                                        class="peer-checked:!border-black"
                                    >
                                        <span class="icon-flate-rate text-5xl text-black"></span>
                                        <p style="font-family:'Montserrat',sans-serif;font-size:15px;font-weight:700;color:#111;margin:8px 0 4px;">{{ rate.base_formatted_price }}</p>
                                        <p style="font-family:'Montserrat',sans-serif;font-size:11px;color:#6b7280;">
                                            <strong>{{ rate.method_title }}</strong> — {{ rate.method_description }}
                                        </p>
                                    </label>

                                    <label
                                        class="icon-radio-unselect peer-checked:icon-radio-select"
                                        :for="rate.method"
                                        style="position:absolute;top:14px;right:14px;cursor:pointer;font-size:22px;color:#111;"
                                    ></label>
                                </div>

                                <?php echo view_render_event('frooxi.shop.checkout.onepage.shipping_method.after'); ?>

                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-shipping-methods', {
            template: '#v-shipping-methods-template',

            props: {
                methods: {
                    type: Object,
                    required: true,
                    default: () => null,
                },
            },

            emits: ['processing', 'processed'],

            methods: {
                store(selectedMethod) {
                    this.$emit('processing', 'payment');

                    this.$axios.post("<?php echo e(route('shop.checkout.onepage.shipping_methods.store')); ?>", {    
                            shipping_method: selectedMethod,
                        })
                        .then(response => {
                            if (response.data.redirect_url) {
                                window.location.href = response.data.redirect_url;
                            } else {
                                this.$emit('processed', response.data.payment_methods);
                            }
                        })
                        .catch(error => {
                            this.$emit('processing', 'shipping');

                            if (error.response.data.redirect_url) {
                                window.location.href = error.response.data.redirect_url;
                            }
                        });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/onepage/shipping.blade.php ENDPATH**/ ?>