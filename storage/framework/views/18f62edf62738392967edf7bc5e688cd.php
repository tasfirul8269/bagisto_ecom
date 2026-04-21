<!-- SEO Meta Content -->
<?php $__env->startPush('meta'); ?>
    <meta name="description" content="<?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>"/>

    <meta name="keywords" content="<?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>"/>
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
        <?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?>
     <?php $__env->endSlot(); ?>

    <?php echo view_render_event('frooxi.shop.checkout.onepage.header.before'); ?>


    
    <div style="border-bottom:1px solid #e5e7eb;background:#fff;">
        <div class="container px-[60px] max-lg:px-8 max-sm:px-4" style="display:flex;align-items:center;justify-content:space-between;padding-top:20px;padding-bottom:20px;">
            <a href="<?php echo e(route('shop.home.index')); ?>" style="display:flex;align-items:center;gap:12px;text-decoration:none;">
                <img src="<?php echo e(asset('themes/shop/logo-gold.png')); ?>" alt="<?php echo e(config('app.name')); ?>" style="height:36px;width:auto;">
            </a>

            
            <div style="display:flex;align-items:center;gap:0;" class="max-md:hidden">
                <template v-for="(step, idx) in [{key:'address',label:'Address'},{key:'shipping',label:'Shipping'},{key:'payment',label:'Payment'},{key:'review',label:'Review'}]" :key="step.key">
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div :style="'width:26px;height:26px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:Montserrat,sans-serif;font-size:11px;font-weight:700;transition:all .2s;' + (currentStep === step.key ? 'background:#111;color:#fff;' : ['address','shipping','payment','review'].indexOf(currentStep) > idx ? 'background:#a38c5a;color:#fff;' : 'background:#f3f4f6;color:#9ca3af;')">
                            <span v-if="['address','shipping','payment','review'].indexOf(currentStep) > idx">&#10003;</span>
                            <span v-else>{{ idx + 1 }}</span>
                        </div>
                        <span :style="'font-family:Montserrat,sans-serif;font-size:11px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;transition:color .2s;' + (currentStep === step.key ? 'color:#111;' : ['address','shipping','payment','review'].indexOf(currentStep) > idx ? 'color:#a38c5a;' : 'color:#d1d5db;')">
                            {{ step.label }}
                        </span>
                    </div>
                    <div v-if="idx < 3" style="width:40px;height:1px;background:#e5e7eb;margin:0 8px;"></div>
                </template>
            </div>

            <?php if(auth()->guard('customer')->guest()): ?>
                <?php echo $__env->make('shop::checkout.login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container px-[60px] max-lg:px-8 max-sm:px-4">
        <div style="padding:32px 0 12px;">
            <h1 style="font-family:'Montserrat',sans-serif;font-size:26px;font-weight:500;letter-spacing:.04em;text-transform:uppercase;color:#111;margin:0 0 6px;"><?php echo app('translator')->get('shop::app.checkout.onepage.index.checkout'); ?></h1>
            <p style="font-family:'Montserrat',sans-serif;font-size:13px;color:#6b7280;margin:0;">Complete your delivery, shipping, and payment details to place your order.</p>
        </div>

        <?php echo view_render_event('frooxi.shop.checkout.onepage.header.after'); ?>


        <!-- Checkout Vue Component -->
        <v-checkout>
            <!-- Shimmer Effect -->
            <?php if (isset($component)) { $__componentOriginald6f1dc615d50d771c9c6062580725e39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6f1dc615d50d771c9c6062580725e39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald6f1dc615d50d771c9c6062580725e39)): ?>
<?php $attributes = $__attributesOriginald6f1dc615d50d771c9c6062580725e39; ?>
<?php unset($__attributesOriginald6f1dc615d50d771c9c6062580725e39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald6f1dc615d50d771c9c6062580725e39)): ?>
<?php $component = $__componentOriginald6f1dc615d50d771c9c6062580725e39; ?>
<?php unset($__componentOriginald6f1dc615d50d771c9c6062580725e39); ?>
<?php endif; ?>
        </v-checkout>
    </div>

    <?php if (! $__env->hasRenderedOnce('0457c0d2-9843-4d8b-beaf-a13e3e9e79a0')): $__env->markAsRenderedOnce('0457c0d2-9843-4d8b-beaf-a13e3e9e79a0');
$__env->startPush('scripts'); ?>
        <script
            type="text/x-template"
            id="v-checkout-template"
        >
            <template v-if="! cart">
                <!-- Shimmer Effect -->
                <?php if (isset($component)) { $__componentOriginald6f1dc615d50d771c9c6062580725e39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6f1dc615d50d771c9c6062580725e39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.checkout.onepage.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.checkout.onepage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald6f1dc615d50d771c9c6062580725e39)): ?>
<?php $attributes = $__attributesOriginald6f1dc615d50d771c9c6062580725e39; ?>
<?php unset($__attributesOriginald6f1dc615d50d771c9c6062580725e39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald6f1dc615d50d771c9c6062580725e39)): ?>
<?php $component = $__componentOriginald6f1dc615d50d771c9c6062580725e39; ?>
<?php unset($__componentOriginald6f1dc615d50d771c9c6062580725e39); ?>
<?php endif; ?>
            </template>

            <template v-else>
                <div class="grid grid-cols-[minmax(0,1fr)_420px] gap-10 pb-10 max-lg:grid-cols-1 max-md:gap-6 max-md:pb-0">
                    <!-- Included Checkout Summary Blade File For Mobile view -->
                    <div class="hidden max-md:block">
                        <?php echo $__env->make('shop::checkout.onepage.summary', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>

                    <div
                        class="overflow-y-auto max-md:grid max-md:gap-4"
                        id="steps-container"
                    >
                        <!-- Included Addresses Blade File -->
                        <template v-if="['address', 'shipping', 'payment', 'review'].includes(currentStep)">
                            <?php echo $__env->make('shop::checkout.onepage.address', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </template>

                        <!-- Included Shipping Methods Blade File -->
                        <template v-if="cart.have_stockable_items && ['shipping', 'payment', 'review'].includes(currentStep)">
                            <?php echo $__env->make('shop::checkout.onepage.shipping', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </template>

                        <!-- Included Payment Methods Blade File -->
                        <template v-if="['payment', 'review'].includes(currentStep)">
                            <?php echo $__env->make('shop::checkout.onepage.payment', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </template>
                    </div>

                    <!-- Included Checkout Summary Blade File For Desktop view -->
                    <div class="sticky top-8 block h-max w-full max-w-full max-lg:w-auto ltr:pl-2 max-lg:ltr:pl-0 rtl:pr-2 max-lg:rtl:pr-0">
                        <div class="block max-md:hidden">
                            <?php echo $__env->make('shop::checkout.onepage.summary', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>

                        <div
                            class="mt-4 flex justify-end"
                            v-if="canPlaceOrder"
                        >
                            <template v-if="cart.payment_method == 'paypal_smart_button'">
                                <?php echo view_render_event('frooxi.shop.checkout.onepage.summary.paypal_smart_button.before'); ?>


                                <!-- Paypal Smart Button Vue Component -->
                                <v-paypal-smart-button></v-paypal-smart-button>

                                <?php echo view_render_event('frooxi.shop.checkout.onepage.summary.paypal_smart_button.after'); ?>

                            </template>

                            <template v-else>
                                <?php if (isset($component)) { $__componentOriginal30786825665921390a816ebee82cf580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30786825665921390a816ebee82cf580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.button.index','data' => ['type' => 'button','style' => 'width:100%;height:52px;background:#111;color:#fff;border:none;border-radius:8px;font-family:\'Montserrat\',sans-serif;font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;cursor:pointer;','title' => trans('shop::app.checkout.onepage.summary.place-order'),':disabled' => 'isPlacingOrder',':loading' => 'isPlacingOrder','@click' => 'placeOrder']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','style' => 'width:100%;height:52px;background:#111;color:#fff;border:none;border-radius:8px;font-family:\'Montserrat\',sans-serif;font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;cursor:pointer;','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('shop::app.checkout.onepage.summary.place-order')),':disabled' => 'isPlacingOrder',':loading' => 'isPlacingOrder','@click' => 'placeOrder']); ?>
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
                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </script>

        <script type="module">
            app.component('v-checkout', {
                template: '#v-checkout-template',

                data() {
                    return {
                        cart: null,

                        displayTax: {
                            prices: "<?php echo e(core()->getConfigData('sales.taxes.shopping_cart.display_prices')); ?>",

                            subtotal: "<?php echo e(core()->getConfigData('sales.taxes.shopping_cart.display_subtotal')); ?>",
                            
                            shipping: "<?php echo e(core()->getConfigData('sales.taxes.shopping_cart.display_shipping_amount')); ?>",
                        },

                        isPlacingOrder: false,

                        currentStep: 'address',

                        shippingMethods: null,

                        paymentMethods: null,

                        canPlaceOrder: false,
                    }
                },

                mounted() {
                    this.getCart();
                },

                methods: {
                    getCart() {
                        this.$axios.get("<?php echo e(route('shop.checkout.onepage.summary')); ?>")
                            .then(response => {
                                this.cart = response.data.data;

                                this.scrollToCurrentStep();
                            })
                            .catch(error => {});
                    },

                    stepForward(step) {
                        this.currentStep = step;

                        if (step == 'review') {
                            this.canPlaceOrder = true;

                            return;
                        }

                        this.canPlaceOrder = false;

                        if (this.currentStep == 'shipping') {
                            this.shippingMethods = null;
                        } else if (this.currentStep == 'payment') {
                            this.paymentMethods = null;
                        }
                    },

                    stepProcessed(data) {
                        if (this.currentStep == 'shipping') {
                            this.shippingMethods = data;
                        } else if (this.currentStep == 'payment') {
                            this.paymentMethods = data;
                        }

                        this.getCart();
                    },

                    scrollToCurrentStep() {
                        let container = document.getElementById('steps-container');

                        if (! container) {
                            return;
                        }

                        container.scrollIntoView({
                            behavior: 'smooth',
                            block: 'end'
                        });
                    },

                    placeOrder() {
                        this.isPlacingOrder = true;

                        this.$axios.post('<?php echo e(route('shop.checkout.onepage.orders.store')); ?>')
                            .then(response => {
                                if (response.data.data.redirect) {
                                    window.location.href = response.data.data.redirect_url;
                                } else {
                                    window.location.href = '<?php echo e(route('shop.checkout.onepage.success')); ?>';
                                }

                                this.isPlacingOrder = false;
                            })
                            .catch(error => {
                                this.isPlacingOrder = false

                                this.$emitter.emit('add-flash', { type: 'error', message: error.response.data.message });
                            });
                    }
                },
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
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/onepage/index.blade.php ENDPATH**/ ?>