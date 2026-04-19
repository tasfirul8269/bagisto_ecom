<!-- Top Selling Products Vue Component -->
<v-dashboard-top-selling-products>
    <!-- Shimmer -->
    <?php if (isset($component)) { $__componentOriginale52ab9a40953f35fb5ba617812c11e56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale52ab9a40953f35fb5ba617812c11e56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.top-selling-products','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.top-selling-products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale52ab9a40953f35fb5ba617812c11e56)): ?>
<?php $attributes = $__attributesOriginale52ab9a40953f35fb5ba617812c11e56; ?>
<?php unset($__attributesOriginale52ab9a40953f35fb5ba617812c11e56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale52ab9a40953f35fb5ba617812c11e56)): ?>
<?php $component = $__componentOriginale52ab9a40953f35fb5ba617812c11e56; ?>
<?php unset($__componentOriginale52ab9a40953f35fb5ba617812c11e56); ?>
<?php endif; ?>
</v-dashboard-top-selling-products>

<?php if (! $__env->hasRenderedOnce('12f9a042-b868-4792-a70d-54f2a32e6b68')): $__env->markAsRenderedOnce('12f9a042-b868-4792-a70d-54f2a32e6b68');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-dashboard-top-selling-products-template"
    >
        <!-- Shimmer -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginale52ab9a40953f35fb5ba617812c11e56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale52ab9a40953f35fb5ba617812c11e56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.top-selling-products','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.top-selling-products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale52ab9a40953f35fb5ba617812c11e56)): ?>
<?php $attributes = $__attributesOriginale52ab9a40953f35fb5ba617812c11e56; ?>
<?php unset($__attributesOriginale52ab9a40953f35fb5ba617812c11e56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale52ab9a40953f35fb5ba617812c11e56)): ?>
<?php $component = $__componentOriginale52ab9a40953f35fb5ba617812c11e56; ?>
<?php unset($__componentOriginale52ab9a40953f35fb5ba617812c11e56); ?>
<?php endif; ?>
        </template>

        <!-- Top Selling Products -->
        <template v-else>
            <div class="rounded-xl border border-gray-100 bg-white shadow-sm">
                
                <!-- Header -->
                <div class="flex items-center justify-between px-5 py-4 border-b border-gray-50">
                    <p class="text-base font-semibold text-gray-900 mb-0">
                        Top Selling Products
                    </p>
                    <p class="text-xs text-gray-500 mb-0">
                        {{ report.date_range }}
                    </p>
                </div>

                <!-- Products List -->
                <div>
                    <a
                        :href="'<?php echo e(route('admin.catalog.products.edit', ':id')); ?>'.replace(':id', item.id)"
                        class="flex items-center gap-4 px-5 py-3 border-b border-gray-50 last:border-b-0 hover:bg-gray-50/50 transition-colors"
                        v-for="item in report.statistics"
                    >
                        <!-- Product Image -->
                        <div class="flex-shrink-0">
                            <img
                                v-if="item.images?.length"
                                class="rounded-lg w-10 h-10 object-cover"
                                :src="item.images[0]?.url"
                            />
                            <div
                                v-else
                                class="rounded-lg w-10 h-10 border-2 border-dashed border-gray-200 flex items-center justify-center"
                            >
                                <span class="text-base text-gray-300">📦</span>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 mb-0 truncate">
                                {{ item.name }}
                            </p>
                            <p class="text-xs text-gray-500 mt-0.5 mb-0">
                                {{ item.formatted_price }}
                            </p>
                        </div>

                        <!-- Revenue -->
                        <div class="text-right flex-shrink-0">
                            <p class="text-sm font-bold text-gray-900 mb-0">
                                {{ item.formatted_revenue }}
                            </p>
                            <p class="text-xs text-gray-500 mt-0.5 mb-0">
                                Revenue
                            </p>
                        </div>
                    </a>

                    <!-- Empty State -->
                    <div v-if="!report.statistics || report.statistics.length === 0" class="px-5 py-10 text-center">
                        <div class="text-4xl mb-3">📊</div>
                        <p class="text-sm text-gray-400 mb-1">No sales data yet</p>
                        <p class="text-xs text-gray-300">Top products will appear here once you start selling</p>
                    </div>
                </div>
            </div>
        </template>
    </script>

    <script type="module">
        app.component('v-dashboard-top-selling-products', {
            template: '#v-dashboard-top-selling-products-template',

            data() {
                return {
                    report: [],
                    isLoading: true,
                }
            },

            mounted() {
                this.getStats({});
                this.$emitter.on('reporting-filter-updated', this.getStats);
            },

            methods: {
                getStats(filters) {
                    this.isLoading = true;
                    var filters = Object.assign({}, filters);
                    filters.type = 'top-selling-products';

                    this.$axios.get("<?php echo e(route('admin.dashboard.stats')); ?>", { params: filters })
                        .then(response => {
                            this.report = response.data;
                            this.isLoading = false;
                        })
                        .catch(error => {
                            this.isLoading = false;
                        });
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Frooxi new\Iqbal Project\NextOutfit\packages\Webkul\Admin\src/resources/views/dashboard/top-selling-products.blade.php ENDPATH**/ ?>