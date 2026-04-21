<?php echo view_render_event('frooxi.shop.checkout.onepage.payment_methods.before'); ?>


<v-payment-methods
    :methods="paymentMethods"
    @processing="stepForward"
    @processed="stepProcessed"
>
    <?php if (isset($component)) { $__componentOriginal27d1292a99e0d106fe10d79161c30d5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27d1292a99e0d106fe10d79161c30d5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.payment-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.payment-method'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27d1292a99e0d106fe10d79161c30d5f)): ?>
<?php $attributes = $__attributesOriginal27d1292a99e0d106fe10d79161c30d5f; ?>
<?php unset($__attributesOriginal27d1292a99e0d106fe10d79161c30d5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27d1292a99e0d106fe10d79161c30d5f)): ?>
<?php $component = $__componentOriginal27d1292a99e0d106fe10d79161c30d5f; ?>
<?php unset($__componentOriginal27d1292a99e0d106fe10d79161c30d5f); ?>
<?php endif; ?>
</v-payment-methods>

<?php echo view_render_event('frooxi.shop.checkout.onepage.payment_methods.after'); ?>


<?php if (! $__env->hasRenderedOnce('05bac7cb-f8e8-4112-a62a-46ff5804808c')): $__env->markAsRenderedOnce('05bac7cb-f8e8-4112-a62a-46ff5804808c');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-payment-methods-template"
    >
        <div class="mb-7 max-md:last:!mb-0">
            <template v-if="! methods">
                <!-- Payment Method shimmer Effect -->
                <?php if (isset($component)) { $__componentOriginal27d1292a99e0d106fe10d79161c30d5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27d1292a99e0d106fe10d79161c30d5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.payment-method','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage.payment-method'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27d1292a99e0d106fe10d79161c30d5f)): ?>
<?php $attributes = $__attributesOriginal27d1292a99e0d106fe10d79161c30d5f; ?>
<?php unset($__attributesOriginal27d1292a99e0d106fe10d79161c30d5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27d1292a99e0d106fe10d79161c30d5f)): ?>
<?php $component = $__componentOriginal27d1292a99e0d106fe10d79161c30d5f; ?>
<?php unset($__componentOriginal27d1292a99e0d106fe10d79161c30d5f); ?>
<?php endif; ?>
            </template>
    
            <template v-else>
                <?php echo view_render_event('frooxi.shop.checkout.onepage.payment_method.accordion.before'); ?>


                <!-- Themed step card -->
                <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;">
                    <div style="display:flex;align-items:center;gap:14px;padding:20px 24px;border-bottom:1px solid #f3f4f6;">
                        <div style="width:28px;height:28px;border-radius:50%;background:#111;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <span style="font-family:'Montserrat',sans-serif;font-size:12px;font-weight:700;color:#fff;">3</span>
                        </div>
                        <h2 style="font-family:'Montserrat',sans-serif;font-size:13px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:#111;margin:0;">
                            <?php echo app('translator')->get('shop::app.checkout.onepage.payment.payment-method'); ?>
                        </h2>
                    </div>

                    <div style="padding:24px;">
                        <div style="display:flex;flex-wrap:wrap;gap:16px;">
                            <div
                                style="position:relative;cursor:pointer;flex:1;min-width:180px;max-width:220px;"
                                v-for="(payment, index) in methods"
                            >
                                <?php echo view_render_event('frooxi.shop.checkout.payment-method.before'); ?>


                                <input
                                    type="radio"
                                    name="payment[method]"
                                    :value="payment.payment"
                                    :id="payment.method"
                                    class="peer hidden"
                                    @change="store(payment)"
                                >

                                <label
                                    :for="payment.method"
                                    style="display:block;cursor:pointer;border:1.5px solid #e5e7eb;border-radius:10px;padding:16px;transition:border-color .15s;"
                                    class="peer-checked:!border-black"
                                >
                                    <?php echo view_render_event('frooxi.shop.checkout.onepage.payment-method.image.before'); ?>

                                    <img
                                        style="max-height:36px;max-width:56px;margin-bottom:10px;"
                                        :src="payment.image"
                                        width="55"
                                        height="55"
                                        :alt="payment.method_title"
                                        :title="payment.method_title"
                                    />
                                    <?php echo view_render_event('frooxi.shop.checkout.onepage.payment-method.image.after'); ?>


                                    <?php echo view_render_event('frooxi.shop.checkout.onepage.payment-method.title.before'); ?>

                                    <p style="font-family:'Montserrat',sans-serif;font-size:12px;font-weight:700;color:#111;margin:0 0 4px;">{{ payment.method_title }}</p>
                                    <?php echo view_render_event('frooxi.shop.checkout.onepage.payment-method.title.after'); ?>


                                    <?php echo view_render_event('frooxi.shop.checkout.onepage.payment-method.description.before'); ?>

                                    <p style="font-family:'Montserrat',sans-serif;font-size:11px;color:#9ca3af;">{{ payment.description }}</p>
                                    <?php echo view_render_event('frooxi.shop.checkout.onepage.payment-method.description.after'); ?>

                                </label>

                                <label
                                    class="icon-radio-unselect peer-checked:icon-radio-select"
                                    :for="payment.method"
                                    style="position:absolute;top:14px;right:14px;cursor:pointer;font-size:22px;color:#111;"
                                ></label>

                                <?php echo view_render_event('frooxi.shop.checkout.payment-method.after'); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php echo view_render_event('frooxi.shop.checkout.onepage.payment_method.accordion.after'); ?>

            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-payment-methods', {
            template: '#v-payment-methods-template',

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
                    this.$emit('processing', 'review');

                    this.$axios.post("<?php echo e(route('shop.checkout.onepage.payment_methods.store')); ?>", {
                            payment: selectedMethod
                        })
                        .then(response => {
                            this.$emit('processed', response.data.cart);

                            // Used in mobile view. 
                            if (window.innerWidth <= 768) {
                                window.scrollTo({
                                    top: document.body.scrollHeight,
                                    behavior: 'smooth'
                                });
                            }
                        })
                        .catch(error => {
                            this.$emit('processing', 'payment');

                            if (error.response.data.redirect_url) {
                                window.location.href = error.response.data.redirect_url;
                            }
                        });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/onepage/payment.blade.php ENDPATH**/ ?>