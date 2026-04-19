<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.dashboard.index.title')
    </x-slot>

    <!-- Dashboard - Modern AdminV2 Style -->
    <div class="p-6 space-y-6" style="font-family:'Montserrat',sans-serif;">

        <!-- Welcome Section + Filter Row -->
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div>
                <p class="text-xs font-bold tracking-widest uppercase text-gray-400 mb-2" v-pre>
                    Good @{{ getTimeOfDay() }}
                </p>
                <h1 class="font-serif text-2xl font-bold text-gray-900 mb-1" v-pre>
                    {{ auth()->guard('admin')->user()->name }},
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
            {!! view_render_event('frooxi.admin.dashboard.overall_details.before') !!}
            @include('admin::dashboard.over-all-details')
            {!! view_render_event('frooxi.admin.dashboard.overall_details.after') !!}
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
                {!! view_render_event('frooxi.admin.dashboard.todays_details.before') !!}
                @include('admin::dashboard.todays-details')
                {!! view_render_event('frooxi.admin.dashboard.todays_details.after') !!}
            </div>

            <!-- Top Products -->
            <div>
                {!! view_render_event('frooxi.admin.dashboard.top_selling.before') !!}
                @include('admin::dashboard.top-selling-products')
                {!! view_render_event('frooxi.admin.dashboard.top_selling.after') !!}
            </div>
        </div>

        <!-- Stock Alert & Customers Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            {!! view_render_event('frooxi.admin.dashboard.stock_threshold.before') !!}
            @include('admin::dashboard.stock-threshold-products')
            {!! view_render_event('frooxi.admin.dashboard.stock_threshold.after') !!}

            <!-- Customers Chart -->
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">
                <p class="text-base font-semibold text-gray-900 mb-1">Customer Distribution</p>
                <p class="text-xs text-gray-500 mb-4">New vs returning vs guest</p>
                <canvas id="customersChart" height="240"></canvas>
            </div>
        </div>

    </div>

    @pushOnce('scripts')
        <script src="{{ frooxi_asset('js/chart.js') }}"></script>

        <script
            type="text/x-template"
            id="v-dashboard-filters-template"
        >
            <div class="flex flex-wrap gap-2 items-center">
                <template v-if="channels.length > 2">
                    <x-admin::dropdown position="bottom-right">
                        <x-slot:toggle>
                            <button
                                type="button"
                                class="inline-flex cursor-pointer items-center gap-x-2 rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none"
                            >
                                @{{ channels.find(channel => channel.code == filters.channel).name }}
                                <span class="text-xl icon-sort-down"></span>
                            </button>
                        </x-slot>

                        <x-slot:menu class="!p-0 shadow-[0_5px_20px_rgba(0,0,0,0.15)] dark:border-gray-800">
                            <x-admin::dropdown.menu.item
                                v-for="channel in channels"
                                ::class="{'bg-gray-100 dark:bg-gray-950': channel.code == filters.channel}"
                                @click="filters.channel = channel.code"
                            >
                                @{{ channel.name }}
                            </x-admin::dropdown.menu.item>
                        </x-slot>
                    </x-admin::dropdown>
                </template>

                <x-admin::flat-picker.date class="!w-[140px]" ::allow-input="false">
                    <input
                        class="flex h-[36px] w-full rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none"
                        v-model="filters.start"
                        placeholder="@lang('admin::app.dashboard.index.start-date')"
                    />
                </x-admin::flat-picker.date>

                <x-admin::flat-picker.date class="!w-[140px]" ::allow-input="false">
                    <input
                        class="flex h-[36px] w-full rounded-full border border-gray-200 bg-white px-4 py-1.5 text-sm font-medium text-gray-700 transition-all hover:bg-gray-100 focus:outline-none"
                        v-model="filters.end"
                        placeholder="@lang('admin::app.dashboard.index.end-date')"
                    />
                </x-admin::flat-picker.date>
            </div>
        </script>

        <script type="module">
            app.component('v-dashboard-filters', {
                template: '#v-dashboard-filters-template',

                data() {
                    return {
                        channels: [
                            {
                                name: "@lang('admin::app.dashboard.index.all-channels')",
                                code: ''
                            },
                            ...@json(core()->getAllChannels()),
                        ],
                        
                        filters: {
                            channel: '',
                            start: "{{ $startDate->format('Y-m-d') }}",
                            end: "{{ $endDate->format('Y-m-d') }}",
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
    @endPushOnce
</x-admin::layouts>
