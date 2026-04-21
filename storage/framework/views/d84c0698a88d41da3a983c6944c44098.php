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
    <!-- Page Title -->
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('admin::app.sales.orders.index.title'); ?>
     <?php $__env->endSlot(); ?>

    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
        <h1 class="font-serif text-2xl font-bold text-gray-900 py-3">
            <?php echo app('translator')->get('admin::app.sales.orders.index.title'); ?>
        </h1>

        <div class="flex items-center gap-x-2.5">
            <?php if (isset($component)) { $__componentOriginal3e5e7d009dccab33c23fb94a77703935 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e5e7d009dccab33c23fb94a77703935 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.datagrid.export.index','data' => ['src' => ''.e(route('admin.sales.orders.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::datagrid.export'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(route('admin.sales.orders.index')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e5e7d009dccab33c23fb94a77703935)): ?>
<?php $attributes = $__attributesOriginal3e5e7d009dccab33c23fb94a77703935; ?>
<?php unset($__attributesOriginal3e5e7d009dccab33c23fb94a77703935); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e5e7d009dccab33c23fb94a77703935)): ?>
<?php $component = $__componentOriginal3e5e7d009dccab33c23fb94a77703935; ?>
<?php unset($__componentOriginal3e5e7d009dccab33c23fb94a77703935); ?>
<?php endif; ?>

            <?php echo view_render_event('frooxi.admin.sales.orders.create.before'); ?>


            
            

            <?php echo view_render_event('frooxi.admin.sales.orders.create.after'); ?>

        </div>
    </div>

    
    

    <?php if (isset($component)) { $__componentOriginal3bea17ac3f7235e71a823454ccb74424 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bea17ac3f7235e71a823454ccb74424 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.datagrid.index','data' => ['src' => route('admin.sales.orders.index'),'isMultiRow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::datagrid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.sales.orders.index')),'isMultiRow' => true]); ?>
        <template #header="{
            isLoading,
            available,
            applied,
            selectAll,
            sort,
            performAction
        }">
            <template v-if="isLoading">
                <?php if (isset($component)) { $__componentOriginalc107096d39100b5f7264e4f2087676a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc107096d39100b5f7264e4f2087676a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.head','data' => ['isMultiRow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc107096d39100b5f7264e4f2087676a5)): ?>
<?php $attributes = $__attributesOriginalc107096d39100b5f7264e4f2087676a5; ?>
<?php unset($__attributesOriginalc107096d39100b5f7264e4f2087676a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc107096d39100b5f7264e4f2087676a5)): ?>
<?php $component = $__componentOriginalc107096d39100b5f7264e4f2087676a5; ?>
<?php unset($__componentOriginalc107096d39100b5f7264e4f2087676a5); ?>
<?php endif; ?>
            </template>
    
            <template v-else>
                <!-- Grid Header -->
                <div class="row grid items-center border-b px-4 py-2.5 dark:border-gray-800"
                    style="grid-template-columns: 130px 160px 1fr 170px 170px 90px 36px; column-gap: 20px;">
    
                    <!-- Order / Date -->
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 dark:text-gray-500">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.order-id'); ?>
                    </p>
    
                    <!-- Status -->
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 dark:text-gray-500">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.status'); ?>
                    </p>
    
                    <!-- Customer -->
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 dark:text-gray-500">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.customer'); ?>
                    </p>
    
                    <!-- Total -->
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 dark:text-gray-500">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.grand-total'); ?>
                    </p>
    
                    <!-- Payment -->
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 dark:text-gray-500">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.pay-via'); ?>
                    </p>
    
                    <!-- Items -->
                    <p class="text-xs font-semibold uppercase tracking-wide text-gray-400 dark:text-gray-500">
                        <?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.items'); ?>
                    </p>
    
                    <!-- Action -->
                    <span></span>
                </div>
            </template>
        </template>
    
        <template #body="{
            isLoading,
            available,
            applied,
            selectAll,
            sort,
            performAction
        }">
            <template v-if="isLoading">
                <?php if (isset($component)) { $__componentOriginal601d211589286a2faeaa4f7f9edf9405 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal601d211589286a2faeaa4f7f9edf9405 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.body','data' => ['isMultiRow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal601d211589286a2faeaa4f7f9edf9405)): ?>
<?php $attributes = $__attributesOriginal601d211589286a2faeaa4f7f9edf9405; ?>
<?php unset($__attributesOriginal601d211589286a2faeaa4f7f9edf9405); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal601d211589286a2faeaa4f7f9edf9405)): ?>
<?php $component = $__componentOriginal601d211589286a2faeaa4f7f9edf9405; ?>
<?php unset($__componentOriginal601d211589286a2faeaa4f7f9edf9405); ?>
<?php endif; ?>
            </template>
    
            <template v-else>
                <!-- Order Rows -->
                <div
                    class="row grid items-center border-b px-4 py-3.5 transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                    style="grid-template-columns: 130px 160px 1fr 170px 170px 90px 36px; column-gap: 20px;"
                    v-for="record in available.records"
                >
                    <!-- Order ID + Date -->
                    <div class="flex flex-col gap-0.5">
                        <p class="text-sm font-bold text-gray-800 dark:text-white">
                            {{ "<?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.id'); ?>".replace(':id', record.increment_id) }}
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500">
                            {{ record.created_at }}
                        </p>
                    </div>
    
                    <!-- Status: read-only badge for terminal statuses, dropdown for editable ones -->
                    <div style="width: fit-content;">
                        <template v-if="['canceled', 'pending_payment', 'completed', 'closed'].includes(record.status)">
                            <span
                                class="order-status-static"
                                :class="'status-' + record.status"
                            >
                                <template v-if="record.status === 'canceled'">Canceled</template>
                                <template v-else-if="record.status === 'pending_payment'">Pending Payment</template>
                                <template v-else-if="record.status === 'completed'">Completed</template>
                                <template v-else-if="record.status === 'closed'">Closed</template>
                            </span>
                        </template>
                        <template v-else>
                            <select
                                class="order-status-badge"
                                :class="'status-' + record.status"
                                :value="record.status"
                                :data-order-id="record.id"
                                onchange="window.updateOrderStatus(this)"
                            >
                                <option value="pending"><?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.pending'); ?></option>
                                <option value="processing"><?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.processing'); ?></option>
                                <option value="shipped"><?php echo app('translator')->get('admin::app.sales.orders.index.datagrid.shipped'); ?></option>
                            </select>
                        </template>
                    </div>
    
                    <!-- Customer + Email -->
                    <div class="flex flex-col gap-0.5 min-w-0">
                        <p class="text-sm font-medium text-gray-800 dark:text-white truncate">
                            {{ record.full_name }}
                        </p>
                        <p class="text-xs text-gray-400 dark:text-gray-500 truncate">
                            {{ record.customer_email }}
                        </p>
                    </div>
    
                    <!-- Grand Total -->
                    <div>
                        <p class="text-sm font-bold text-gray-800 dark:text-white">
                            {{ $admin.formatPrice(record.base_grand_total) }}
                        </p>
                    </div>
    
                    <!-- Payment Method -->
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            {{ record.method }}
                        </p>
                    </div>
    
                    <!-- Items -->
                    <div
                        class="text-xs"
                        v-html="record.items"
                    >
                    </div>
    
                    <!-- View Action -->
                    <div class="flex justify-end">
                        <a :href="'<?php echo e(route('admin.sales.orders.view', ':id')); ?>'.replace(':id', record.id)">
                            <span class="icon-sort-right rtl:icon-sort-left cursor-pointer p-1.5 text-2xl hover:rounded-md hover:bg-gray-200 dark:hover:bg-gray-800"></span>
                        </a>
                    </div>
                </div>
            </template>
        </template>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bea17ac3f7235e71a823454ccb74424)): ?>
<?php $attributes = $__attributesOriginal3bea17ac3f7235e71a823454ccb74424; ?>
<?php unset($__attributesOriginal3bea17ac3f7235e71a823454ccb74424); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bea17ac3f7235e71a823454ccb74424)): ?>
<?php $component = $__componentOriginal3bea17ac3f7235e71a823454ccb74424; ?>
<?php unset($__componentOriginal3bea17ac3f7235e71a823454ccb74424); ?>
<?php endif; ?>

    <?php echo $__env->make('admin::customers.customers.index.create', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if (! $__env->hasRenderedOnce('92dad9f4-0397-472d-b95a-6701ca37deab')): $__env->markAsRenderedOnce('92dad9f4-0397-472d-b95a-6701ca37deab');
$__env->startPush('scripts'); ?>
        <style>
            .order-status-badge {
                display: inline-flex;
                align-items: center;
                padding: 4px 10px;
                border-radius: 9999px;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 0.03em;
                cursor: pointer;
                border: none;
                outline: none;
                appearance: none;
                -webkit-appearance: none;
                background-image: url('data:image/svg+xml,%3Csvg xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22 width%3D%2210%22 height%3D%226%22 fill%3D%22none%22%3E%3Cpath d%3D%22M1 1l4 4 4-4%22 stroke%3D%22%23666%22 stroke-width%3D%221.5%22 stroke-linecap%3D%22round%22 stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E');
                background-repeat: no-repeat;
                background-position: right 7px center;
                padding-right: 22px;
                transition: opacity .15s;
            }
            .order-status-badge:hover { opacity: .85; }
            .order-status-static {
                display: inline-flex;
                align-items: center;
                padding: 4px 10px;
                border-radius: 9999px;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 0.03em;
                cursor: default;
                user-select: none;
            }
            .status-pending         { background: #fef3c7; color: #92400e; }
            .status-processing      { background: #dbeafe; color: #1e40af; }
            .status-shipped         { background: #d1fae5; color: #065f46; }
            .status-canceled        { background: #fee2e2; color: #991b1b; }
            .status-pending_payment { background: #f3f4f6; color: #6b7280; }
        </style>
        <script
            type="text/x-template"
            id="v-customer-search-template"
        >
            <div class="">
                <!-- Search Drawer -->
                <?php if (isset($component)) { $__componentOriginal9bfb526197f1d7304e7fade44c26fbb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['ref' => 'searchCustomerDrawer','@close' => 'searchTerm = \'\'; searchedCustomers = [];']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'searchCustomerDrawer','@close' => 'searchTerm = \'\'; searchedCustomers = [];']); ?>
                    <!-- Drawer Header -->
                     <?php $__env->slot('header', null, []); ?> 
                        <div class="grid gap-3">
                            <p class="py-2 text-xl font-medium dark:text-white">
                                <?php echo app('translator')->get('admin::app.sales.orders.index.search-customer.title'); ?>
                            </p>

                            <div class="relative w-full">
                                <input
                                    type="text"
                                    class="block w-full rounded-lg border bg-white py-1.5 leading-6 text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 ltr:pl-3 ltr:pr-10 rtl:pl-10 rtl:pr-3"
                                    placeholder="<?php echo app('translator')->get('admin::app.sales.orders.index.search-customer.search-by'); ?>"
                                    v-model.lazy="searchTerm"
                                    v-debounce="500"
                                />

                                <template v-if="isSearching">
                                    <img
                                        class="absolute top-2.5 h-5 w-5 animate-spin ltr:right-3 rtl:left-3"
                                        src="<?php echo e(frooxi_asset('images/spinner.svg')); ?>"
                                    />
                                </template>

                                <template v-else>
                                    <span class="icon-search pointer-events-none absolute top-1.5 flex items-center text-2xl ltr:right-3 rtl:left-3"></span>
                                </template>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>

                    <!-- Drawer Content -->
                     <?php $__env->slot('content', null, ['class' => '!p-0']); ?> 
                        <div
                            class="grid max-h-[400px] overflow-y-auto"
                            v-if="searchedCustomers.length"
                        >
                            <div
                                class="grid cursor-pointer place-content-start gap-1.5 border-b border-slate-300 p-4 last:border-b-0 hover:bg-gray-100 dark:border-gray-800 dark:hover:bg-gray-950"
                                v-for="customer in searchedCustomers"
                                @click="createCart(customer)"
                            >
                                <p class="text-base font-semibold text-gray-600 dark:text-gray-300">
                                    {{ customer.first_name + ' ' + customer.last_name }}
                                </p>

                                <p class="text-gray-500">
                                    {{ customer.email }}
                                </p>
                            </div>
                        </div>

                        <!-- For Empty Variations -->
                        <div
                            class="grid justify-center justify-items-center gap-3.5 px-2.5 py-10"
                            v-else
                        >
                            <!-- Placeholder Image -->
                            <img
                                src="<?php echo e(frooxi_asset('images/empty-placeholders/customers.svg')); ?>"
                                class="h-20 w-20 dark:mix-blend-exclusion dark:invert"
                            />

                            <!-- Add Variants Information -->
                            <div class="flex flex-col items-center gap-1.5">
                                <p class="text-base font-semibold text-gray-400">
                                    <?php echo app('translator')->get('admin::app.sales.orders.index.search-customer.empty-title'); ?>
                                </p>

                                <p class="text-gray-400">
                                    <?php echo app('translator')->get('admin::app.sales.orders.index.search-customer.empty-info'); ?>
                                </p>

                                <button
                                    class="secondary-button"
                                    @click="$refs.searchCustomerDrawer.close(); $refs.createCustomerComponent.openModal()"
                                >
                                    <?php echo app('translator')->get('admin::app.sales.orders.index.search-customer.create-btn'); ?>
                                </button>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8)): ?>
<?php $attributes = $__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8; ?>
<?php unset($__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9bfb526197f1d7304e7fade44c26fbb8)): ?>
<?php $component = $__componentOriginal9bfb526197f1d7304e7fade44c26fbb8; ?>
<?php unset($__componentOriginal9bfb526197f1d7304e7fade44c26fbb8); ?>
<?php endif; ?>

                <v-create-customer-form
                    ref="createCustomerComponent"
                    @customer-created="createCart"
                ></v-create-customer-form>
            </div>
        </script>

        <script type="module">
            app.component('v-customer-search', {
                template: '#v-customer-search-template',

                data() {
                    return {
                        searchTerm: '',

                        searchedCustomers: [],

                        isSearching: false,
                    }
                },

                watch: {
                    searchTerm: function(newVal, oldVal) {
                        this.search();
                    }
                },

                methods: {
                    openDrawer() {
                        this.$refs.searchCustomerDrawer.open();
                    },

                    search() {
                        if (this.searchTerm.length <= 1) {
                            this.searchedCustomers = [];

                            return;
                        }

                        this.isSearching = true;

                        let self = this;

                        this.$axios.get("<?php echo e(route('admin.customers.customers.search')); ?>", {
                                params: {
                                    query: this.searchTerm,
                                }
                            })
                            .then(function(response) {
                                self.isSearching = false;

                                self.searchedCustomers = response.data.data;
                            })
                            .catch(function (error) {
                            });
                    },

                    

                    updateOrderStatus(orderId, status) {
                        console.log('Updating order:', orderId, 'to status:', status);
                        
                        this.$axios.post(`<?php echo e(route('admin.sales.orders.update_status', ':id')); ?>`.replace(':id', orderId), {
                            status: status
                        })
                        .then((response) => {
                            console.log('Success:', response.data);
                            this.$emitter.emit('add-flash', { 
                                type: 'success', 
                                message: response.data.message 
                            });
                            // Reload the datagrid to show updated status
                            this.$refs.datagridRef?.fetchRecords();
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                            console.error('Response:', error.response?.data);
                            this.$emitter.emit('add-flash', { 
                                type: 'error', 
                                message: error.response?.data?.message || 'Failed to update status' 
                            });
                        });
                    },
                }
            });
        </script>
        
        <script>
            // Global function for order status update (accessible from datagrid template)
            window.updateOrderStatus = function(selectElement) {
                const orderId = selectElement.dataset.orderId;
                const status = selectElement.value;
                
                console.log('Updating order:', orderId, 'to status:', status);
                
                axios.post("<?php echo e(route('admin.sales.orders.update_status', ':id')); ?>".replace(':id', orderId), {
                    status: status
                })
                .then((response) => {
                    console.log('Success:', response.data);
                    window.$emitter?.emit('add-flash', { 
                        type: 'success', 
                        message: response.data.message 
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);
                    console.error('Response:', error.response?.data);
                    window.$emitter?.emit('add-flash', { 
                        type: 'error', 
                        message: error.response?.data?.message || 'Failed to update status' 
                    });
                });
            }
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
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Admin/src/resources/views/sales/orders/index.blade.php ENDPATH**/ ?>