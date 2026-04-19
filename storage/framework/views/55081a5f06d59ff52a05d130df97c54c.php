<?php if (isset($component)) { $__componentOriginal8001c520f4b7dcb40a16cd3b411856d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('admin::app.dashboard.index.title'); ?>
     <?php $__env->endSlot(); ?>

    <!-- Dashboard - Modern AdminV2 Style -->
    <div class="p-6 space-y-6" style="font-family:'Montserrat',sans-serif;">

        <!-- Welcome Section + Filter Row -->
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <p class="text-xs font-bold tracking-widest uppercase text-gray-400 mb-2" v-pre>
                    Good {{ getTimeOfDay() }}
                </p>
                <h1 class="font-serif text-2xl font-bold text-gray-900 mb-1" v-pre>
                    <?php echo e(auth()->guard('admin')->user()->name); ?>,
                </h1>
                <p class="text-sm text-gray-500">
                    Here's what's happening with your store today.
                </p>
            </div>

            <!-- Date Filter -->
            <div class="flex-shrink-0">
                <v-dashboard-filters>
                    <div class="flex gap-2">
                        <div class="shimmer h-[36px] w-[132px] rounded-full"></div>
                        <div class="shimmer h-[36px] w-[140px] rounded-full"></div>
                    </div>
                </v-dashboard-filters>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php echo view_render_event('frooxi.admin.dashboard.overall_details.before'); ?>

            <?php echo $__env->make('admin::dashboard.over-all-details', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo view_render_event('frooxi.admin.dashboard.overall_details.after'); ?>

        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Revenue Chart -->
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">
                <p class="text-base font-semibold text-gray-900 mb-1">Revenue Trend</p>
                <p class="text-xs text-gray-500 mb-4">Monthly revenue overview</p>
                <canvas id="revenueChart" height="280"></canvas>
            </div>

            <!-- Orders Chart -->
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">
                <p class="text-base font-semibold text-gray-900 mb-1">Orders Overview</p>
                <p class="text-xs text-gray-500 mb-4">Daily orders this week</p>
                <canvas id="ordersChart" height="280"></canvas>
            </div>
        </div>

        <!-- Bottom Row: Recent Orders + Top Products + Stock Alert -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <!-- Recent Orders -->
            <div class="lg:col-span-2">
                <?php echo view_render_event('frooxi.admin.dashboard.todays_details.before'); ?>

                <?php echo $__env->make('admin::dashboard.todays-details', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo view_render_event('frooxi.admin.dashboard.todays_details.after'); ?>

            </div>

            <!-- Top Products -->
            <div>
                <?php echo view_render_event('frooxi.admin.dashboard.top_selling.before'); ?>

                <?php echo $__env->make('admin::dashboard.top-selling-products', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo view_render_event('frooxi.admin.dashboard.top_selling.after'); ?>

            </div>
        </div>

        <!-- Stock Alert & Customers Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <?php echo view_render_event('frooxi.admin.dashboard.stock_threshold.before'); ?>

            <?php echo $__env->make('admin::dashboard.stock-threshold-products', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo view_render_event('frooxi.admin.dashboard.stock_threshold.after'); ?>


            <!-- Customers Chart -->
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">
                <p class="text-base font-semibold text-gray-900 mb-1">Customer Distribution</p>
                <p class="text-xs text-gray-500 mb-4">New vs returning vs guest</p>
                <canvas id="customersChart" height="240"></canvas>
            </div>
        </div>

    </div>

    <?php if (! $__env->hasRenderedOnce('456b10b3-64b3-4293-a633-817e404a3d66')): $__env->markAsRenderedOnce('456b10b3-64b3-4293-a633-817e404a3d66');
$__env->startPush('scripts'); ?>
        <script src="<?php echo e(frooxi_asset('js/chart.js')); ?>"></script>

        <script
            type="text/x-template"
            id="v-dashboard-filters-template"
        >
            <div class="flex flex-wrap gap-2 items-center">
                <template v-if="channels.length > 2">
                    <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => ['position' => 'bottom-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-right']); ?>
                         <?php $__env->slot('toggle', null, []); ?> 
                            <button
                                type="button"
                                class="inline-flex cursor-pointer items-center gap-x-2 rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none"
                            >
                                {{ channels.find(channel => channel.code == filters.channel).name }}
                                <span class="text-xl icon-sort-down"></span>
                            </button>
                         <?php $__env->endSlot(); ?>

                         <?php $__env->slot('menu', null, ['class' => '!p-0 shadow-[0_5px_20px_rgba(0,0,0,0.15)] dark:border-gray-800']); ?> 
                            <?php if (isset($component)) { $__componentOriginal0223c8534d6a243be608c3a65289c4d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0223c8534d6a243be608c3a65289c4d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.menu.item','data' => ['vFor' => 'channel in channels',':class' => '{\'bg-gray-100 dark:bg-gray-950\': channel.code == filters.channel}','@click' => 'filters.channel = channel.code']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => 'channel in channels',':class' => '{\'bg-gray-100 dark:bg-gray-950\': channel.code == filters.channel}','@click' => 'filters.channel = channel.code']); ?>
                                {{ channel.name }}
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0223c8534d6a243be608c3a65289c4d0)): ?>
<?php $attributes = $__attributesOriginal0223c8534d6a243be608c3a65289c4d0; ?>
<?php unset($__attributesOriginal0223c8534d6a243be608c3a65289c4d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0223c8534d6a243be608c3a65289c4d0)): ?>
<?php $component = $__componentOriginal0223c8534d6a243be608c3a65289c4d0; ?>
<?php unset($__componentOriginal0223c8534d6a243be608c3a65289c4d0); ?>
<?php endif; ?>
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
                </template>

                <?php if (isset($component)) { $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => ['class' => '!w-[140px]',':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!w-[140px]',':allow-input' => 'false']); ?>
                    <input
                        class="flex h-[36px] w-full rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none"
                        v-model="filters.start"
                        placeholder="<?php echo app('translator')->get('admin::app.dashboard.index.start-date'); ?>"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $attributes = $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $component = $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => ['class' => '!w-[140px]',':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!w-[140px]',':allow-input' => 'false']); ?>
                    <input
                        class="flex h-[36px] w-full rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none"
                        v-model="filters.end"
                        placeholder="<?php echo app('translator')->get('admin::app.dashboard.index.end-date'); ?>"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $attributes = $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $component = $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>
            </div>
        </script>

        <script type="module">
            app.component('v-dashboard-filters', {
                template: '#v-dashboard-filters-template',

                data() {
                    return {
                        channels: [
                            {
                                name: "<?php echo app('translator')->get('admin::app.dashboard.index.all-channels'); ?>",
                                code: ''
                            },
                            ...<?php echo json_encode(core()->getAllChannels(), 15, 512) ?>,
                        ],
                        
                        filters: {
                            channel: '',
                            start: "<?php echo e($startDate->format('Y-m-d')); ?>",
                            end: "<?php echo e($endDate->format('Y-m-d')); ?>",
                        }
                    }
                },

                watch: {
                    filters: {
                        handler() {
                            this.$emitter.emit('reporting-filter-updated', this.filters);
                        },
                        deep: true
                    }
                },
            });
        </script>

        <!-- Chart.js Initialization -->
        <script>
        (function() {
            function initCharts() {
                // Revenue Chart
                var revenueCanvas = document.getElementById('revenueChart');
                if (revenueCanvas && typeof Chart !== 'undefined') {
                    var revenueCtx = revenueCanvas.getContext('2d');
                    new Chart(revenueCtx, {
                        type: 'line',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                            datasets: [{
                                label: 'Revenue (৳)',
                                data: [12000, 19000, 15000, 25000, 22000, 30000],
                                borderColor: '#D4A84B',
                                backgroundColor: 'rgba(212, 168, 75, 0.1)',
                                borderWidth: 2,
                                fill: true,
                                tension: 0.4,
                                pointBackgroundColor: '#D4A84B',
                                pointBorderColor: '#fff',
                                pointBorderWidth: 2,
                                pointRadius: 4,
                                pointHoverRadius: 6,
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: { display: false },
                                tooltip: {
                                    backgroundColor: '#1A1A1A',
                                    titleFont: { family: 'Montserrat' },
                                    bodyFont: { family: 'Montserrat' },
                                    padding: 12,
                                    cornerRadius: 8,
                                }
                            },
                            scales: {
                                x: {
                                    grid: { display: false },
                                    ticks: { font: { family: 'Montserrat', size: 11 }, color: '#9CA3AF' }
                                },
                                y: {
                                    grid: { color: 'rgba(0,0,0,0.04)' },
                                    ticks: { font: { family: 'Montserrat', size: 11 }, color: '#9CA3AF' }
                                }
                            }
                        }
                    });
                }

                // Orders Chart
                var ordersCanvas = document.getElementById('ordersChart');
                if (ordersCanvas && typeof Chart !== 'undefined') {
                    var ordersCtx = ordersCanvas.getContext('2d');
                    new Chart(ordersCtx, {
                        type: 'bar',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                            datasets: [{
                                label: 'Orders',
                                data: [45, 62, 55, 78, 69, 85],
                                backgroundColor: 'rgba(212, 168, 75, 0.8)',
                                hoverBackgroundColor: '#D4A84B',
                                borderRadius: 6,
                                borderSkipped: false,
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: { display: false },
                                tooltip: {
                                    backgroundColor: '#1A1A1A',
                                    titleFont: { family: 'Montserrat' },
                                    bodyFont: { family: 'Montserrat' },
                                    padding: 12,
                                    cornerRadius: 8,
                                }
                            },
                            scales: {
                                x: {
                                    grid: { display: false },
                                    ticks: { font: { family: 'Montserrat', size: 11 }, color: '#9CA3AF' }
                                },
                                y: {
                                    grid: { color: 'rgba(0,0,0,0.04)' },
                                    ticks: { font: { family: 'Montserrat', size: 11 }, color: '#9CA3AF' }
                                }
                            }
                        }
                    });
                }

                // Customers Doughnut Chart
                var customersCanvas = document.getElementById('customersChart');
                if (customersCanvas && typeof Chart !== 'undefined') {
                    var customersCtx = customersCanvas.getContext('2d');
                    new Chart(customersCtx, {
                        type: 'doughnut',
                        data: {
                            labels: ['New', 'Returning', 'Inactive'],
                            datasets: [{
                                data: [60, 30, 10],
                                backgroundColor: ['#D4A84B', '#E8C97A', '#F3E5C3'],
                                borderWidth: 0,
                                hoverOffset: 4,
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            cutout: '70%',
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        font: { family: 'Montserrat', size: 12 },
                                        padding: 16,
                                        usePointStyle: true,
                                        pointStyle: 'circle',
                                    }
                                },
                                tooltip: {
                                    backgroundColor: '#1A1A1A',
                                    titleFont: { family: 'Montserrat' },
                                    bodyFont: { family: 'Montserrat' },
                                    padding: 12,
                                    cornerRadius: 8,
                                }
                            }
                        }
                    });
                }
            }

            // Reliable initialization: wait for both DOM and Chart.js
            function waitForChart(attempts) {
                if (typeof Chart !== 'undefined') {
                    initCharts();
                } else if (attempts < 50) {
                    setTimeout(function() { waitForChart(attempts + 1); }, 100);
                }
            }

            if (document.readyState === 'complete') {
                waitForChart(0);
            } else {
                window.addEventListener('load', function() { waitForChart(0); });
            }
        })();
        </script>
    <?php $__env->stopPush(); endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1)): ?>
<?php $attributes = $__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1; ?>
<?php unset($__attributesOriginal8001c520f4b7dcb40a16cd3b411856d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8001c520f4b7dcb40a16cd3b411856d1)): ?>
<?php $component = $__componentOriginal8001c520f4b7dcb40a16cd3b411856d1; ?>
<?php unset($__componentOriginal8001c520f4b7dcb40a16cd3b411856d1); ?>
<?php endif; ?>
<?php /**PATH D:\Frooxi new\Iqbal Project\NextOutfit\packages\Webkul\Admin\src/resources/views/dashboard/index.blade.php ENDPATH**/ ?>