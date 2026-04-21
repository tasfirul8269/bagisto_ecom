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
        <?php echo app('translator')->get('admin::app.catalog.products.index.title'); ?>
     <?php $__env->endSlot(); ?>

    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
        <p class="font-serif text-2xl font-bold text-gray-900 dark:text-white">
            <?php echo app('translator')->get('admin::app.catalog.products.index.title'); ?>
        </p>

        <div class="flex items-center gap-x-2.5">
            <!-- Export Modal -->
            <?php if (isset($component)) { $__componentOriginal3e5e7d009dccab33c23fb94a77703935 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e5e7d009dccab33c23fb94a77703935 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.datagrid.export.index','data' => ['src' => route('admin.catalog.products.index'),'class' => 'secondary-button']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::datagrid.export'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.catalog.products.index')),'class' => 'secondary-button']); ?>
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

            <?php echo view_render_event('frooxi.admin.catalog.products.create.before'); ?>


            <?php if(bouncer()->hasPermission('catalog.products.create')): ?>
                <v-create-product-form>
                    <button
                        type="button"
                        class="primary-button"
                    >
                        <?php echo app('translator')->get('admin::app.catalog.products.index.create-btn'); ?>
                    </button>
                </v-create-product-form>
            <?php endif; ?>

            <?php echo view_render_event('frooxi.admin.catalog.products.create.after'); ?>

        </div>
    </div>

    <?php echo view_render_event('frooxi.admin.catalog.products.list.before'); ?>


    <!-- Datagrid -->
    <?php if (isset($component)) { $__componentOriginal3bea17ac3f7235e71a823454ccb74424 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bea17ac3f7235e71a823454ccb74424 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.datagrid.index','data' => ['src' => route('admin.catalog.products.index'),'isMultiRow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::datagrid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.catalog.products.index')),'isMultiRow' => true]); ?>
        <!-- Datagrid Header -->
        <?php
            $hasPermission = bouncer()->hasPermission('catalog.products.edit') || bouncer()->hasPermission('catalog.products.delete');
        ?>

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
                <span></span>
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
                <div class="overflow-x-auto">
                    <table class="w-full table-fixed border-collapse">
                        <colgroup>
                            <?php if($hasPermission): ?>
                            <col style="width: 48px;" />
                            <?php endif; ?>
                            <col style="width: 90px;" />  
                            <col style="width: auto;" />   
                            <col style="width: 180px;" />  
                            <col style="width: 130px;" />  
                            <col style="width: 100px;" />  
                            <col style="width: 140px;" />  
                        </colgroup>
                        <thead>
                            <tr class="border-b bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                                <?php if($hasPermission): ?>
                                <th class="px-4 py-3">
                                    <label
                                        class="flex w-max cursor-pointer select-none items-center gap-1"
                                        for="mass_action_select_all_records"
                                    >
                                        <input
                                            type="checkbox"
                                            name="mass_action_select_all_records"
                                            id="mass_action_select_all_records"
                                            class="peer hidden"
                                            :checked="['all', 'partial'].includes(applied.massActions.meta.mode)"
                                            @change="selectAll"
                                        >
                                        <span
                                            class="icon-uncheckbox cursor-pointer rounded-md text-2xl"
                                            :class="[
                                                applied.massActions.meta.mode === 'all' ? 'peer-checked:icon-checked peer-checked:text-blue-600' : (
                                                    applied.massActions.meta.mode === 'partial' ? 'peer-checked:icon-checkbox-partial peer-checked:text-blue-600' : ''
                                                ),
                                            ]"
                                        >
                                        </span>
                                    </label>
                                </th>
                                <?php endif; ?>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Image</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Price</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Quantity</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="border-b transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                                v-for="record in available.records"
                                :key="record.product_id"
                            >
                                <!-- Checkbox -->
                                <?php if($hasPermission): ?>
                                <td class="px-4 py-3">
                                    <input
                                        type="checkbox"
                                        :name="`mass_action_select_record_${record.product_id}`"
                                        :id="`mass_action_select_record_${record.product_id}`"
                                        :value="record.product_id"
                                        class="peer hidden"
                                        v-model="applied.massActions.indices"
                                    >
                                    <label
                                        class="icon-uncheckbox peer-checked:icon-checked cursor-pointer rounded-md text-2xl peer-checked:text-blue-600"
                                        :for="`mass_action_select_record_${record.product_id}`"
                                    ></label>
                                </td>
                                <?php endif; ?>

                                <!-- Product Image -->
                                <td class="px-4 py-3">
                                    <template v-if="record.base_image">
                                        <img class="h-16 w-16 rounded object-cover" :src="record.base_image" />
                                    </template>
                                    <template v-else>
                                        <div class="relative h-16 w-16 rounded border border-dashed border-gray-300 dark:border-gray-800 dark:mix-blend-exclusion dark:invert">
                                            <img src="<?php echo e(frooxi_asset('images/product-placeholders/front.svg')); ?>" class="h-full w-full object-cover">
                                            <p class="absolute bottom-0 w-full text-center text-[6px] font-semibold text-gray-400">
                                                <?php echo app('translator')->get('admin::app.catalog.products.index.datagrid.product-image'); ?>
                                            </p>
                                        </div>
                                    </template>
                                </td>

                                <!-- Product Name & SKU -->
                                <td class="px-4 py-3">
                                    <p class="text-sm font-semibold text-gray-800 dark:text-white truncate">
                                        {{ record.name }}
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                        SKU: {{ record.sku }}
                                    </p>
                                </td>

                                <!-- Price (already formatted by DataGrid closure) -->
                                <td class="px-4 py-3">
                                    <p class="text-sm font-semibold text-gray-800 dark:text-white" v-html="record.price"></p>
                                </td>

                                <!-- Quantity (already formatted by DataGrid closure) -->
                                <td class="px-4 py-3">
                                    <p class="text-sm" v-html="record.quantity"></p>
                                </td>

                                <!-- Status -->
                                <td class="px-4 py-3">
                                    <p :class="[record.status ? 'label-active': 'label-info']" class="inline-block">
                                        {{ record.status ? "<?php echo app('translator')->get('admin::app.catalog.products.index.datagrid.active'); ?>" : "<?php echo app('translator')->get('admin::app.catalog.products.index.datagrid.disable'); ?>" }}
                                    </p>
                                </td>

                                <!-- Actions -->
                                <td class="px-4 py-3">
                                    <div class="flex items-center gap-2">
                                        <a
                                            v-if="record.url_key"
                                            :href="'<?php echo e(url('/')); ?>/' + record.url_key"
                                            target="_blank"
                                            class="cursor-pointer rounded-md p-1.5 text-xl transition-all hover:bg-gray-200 dark:hover:bg-gray-800 icon-eye"
                                            title="<?php echo app('translator')->get('admin::app.view'); ?>"
                                        ></a>
                                        <span
                                            class="cursor-pointer rounded-md p-1.5 text-xl transition-all hover:bg-gray-200 dark:hover:bg-gray-800"
                                            :class="action.icon"
                                            v-text="! action.icon ? action.title : ''"
                                            v-for="action in record.actions"
                                            @click="performAction(action)"
                                        ></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

    <?php echo view_render_event('frooxi.admin.catalog.products.list.after'); ?>


    <?php if (! $__env->hasRenderedOnce('29c69787-ee4d-447d-a50a-9ef6e7e2cc83')): $__env->markAsRenderedOnce('29c69787-ee4d-447d-a50a-9ef6e7e2cc83');
$__env->startPush('scripts'); ?>
        <script
            type="text/x-template"
            id="v-create-product-form-template"
        >
            <div>
                <!-- Product Create Button -->
                <?php if(bouncer()->hasPermission('catalog.products.create')): ?>
                    <button
                        type="button"
                        class="primary-button"
                        @click="$refs.productCreateModal.toggle()"
                    >
                        <?php echo app('translator')->get('admin::app.catalog.products.index.create-btn'); ?>
                    </button>
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['vSlot' => '{ meta, errors, handleSubmit }','as' => 'div']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-slot' => '{ meta, errors, handleSubmit }','as' => 'div']); ?>
                    <form @submit="handleSubmit($event, create)">
                        <!-- Customer Create Modal -->
                        <?php if (isset($component)) { $__componentOriginal09768308838b828c7799162f44758281 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal09768308838b828c7799162f44758281 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.modal.index','data' => ['ref' => 'productCreateModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'productCreateModal']); ?>
                            <!-- Modal Header -->
                             <?php $__env->slot('header', null, []); ?> 
                                <p
                                    class="text-lg font-bold text-gray-800 dark:text-white"
                                    v-if="! attributes.length"
                                >
                                    <?php echo app('translator')->get('admin::app.catalog.products.index.create.title'); ?>
                                </p>

                                <p
                                    class="text-lg font-bold text-gray-800 dark:text-white"
                                    v-else
                                >
                                    <?php echo app('translator')->get('admin::app.catalog.products.index.create.configurable-attributes'); ?>
                                </p>
                             <?php $__env->endSlot(); ?>

                            <!-- Modal Content -->
                             <?php $__env->slot('content', null, []); ?> 
                                <div v-show="! attributes.length">
                                    <?php echo view_render_event('frooxi.admin.catalog.products.create_form.general.controls.before'); ?>


                                    <!-- Product Type -->
                                    <?php if (isset($component)) { $__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginal8378211f70f8c39b16d47cecdac9c7c8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                            <?php echo app('translator')->get('admin::app.catalog.products.index.create.type'); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8)): ?>
<?php $attributes = $__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8; ?>
<?php unset($__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8378211f70f8c39b16d47cecdac9c7c8)): ?>
<?php $component = $__componentOriginal8378211f70f8c39b16d47cecdac9c7c8; ?>
<?php unset($__componentOriginal8378211f70f8c39b16d47cecdac9c7c8); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal53af403f6b2179a3039d488b8ab2a267 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53af403f6b2179a3039d488b8ab2a267 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'select','name' => 'type','rules' => 'required','label' => trans('admin::app.catalog.products.index.create.type')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'select','name' => 'type','rules' => 'required','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.catalog.products.index.create.type'))]); ?>
                                            <?php $__currentLoopData = config('product_types'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>">
                                                    <?php echo app('translator')->get($type['name']); ?>
                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53af403f6b2179a3039d488b8ab2a267)): ?>
<?php $attributes = $__attributesOriginal53af403f6b2179a3039d488b8ab2a267; ?>
<?php unset($__attributesOriginal53af403f6b2179a3039d488b8ab2a267); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53af403f6b2179a3039d488b8ab2a267)): ?>
<?php $component = $__componentOriginal53af403f6b2179a3039d488b8ab2a267; ?>
<?php unset($__componentOriginal53af403f6b2179a3039d488b8ab2a267); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal8da25fb6534e2ef288914e35c32417f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8da25fb6534e2ef288914e35c32417f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'type']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8da25fb6534e2ef288914e35c32417f8)): ?>
<?php $attributes = $__attributesOriginal8da25fb6534e2ef288914e35c32417f8; ?>
<?php unset($__attributesOriginal8da25fb6534e2ef288914e35c32417f8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8da25fb6534e2ef288914e35c32417f8)): ?>
<?php $component = $__componentOriginal8da25fb6534e2ef288914e35c32417f8; ?>
<?php unset($__componentOriginal8da25fb6534e2ef288914e35c32417f8); ?>
<?php endif; ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3)): ?>
<?php $attributes = $__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3; ?>
<?php unset($__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3)): ?>
<?php $component = $__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3; ?>
<?php unset($__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3); ?>
<?php endif; ?>

                                    <!-- Attribute Family Id (hidden, auto-assigned to default) -->
                                    <input type="hidden" name="attribute_family_id" value="1">

                                    <!-- SKU -->
                                    <?php if (isset($component)) { $__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <?php if (isset($component)) { $__componentOriginal8378211f70f8c39b16d47cecdac9c7c8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => 'required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'required']); ?>
                                            <?php echo app('translator')->get('admin::app.catalog.products.index.create.sku'); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8)): ?>
<?php $attributes = $__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8; ?>
<?php unset($__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8378211f70f8c39b16d47cecdac9c7c8)): ?>
<?php $component = $__componentOriginal8378211f70f8c39b16d47cecdac9c7c8; ?>
<?php unset($__componentOriginal8378211f70f8c39b16d47cecdac9c7c8); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal53af403f6b2179a3039d488b8ab2a267 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53af403f6b2179a3039d488b8ab2a267 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'sku',':rules' => '{ required: true, regex: /^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$/ }','label' => trans('admin::app.catalog.products.index.create.sku')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'sku',':rules' => '{ required: true, regex: /^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$/ }','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.catalog.products.index.create.sku'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53af403f6b2179a3039d488b8ab2a267)): ?>
<?php $attributes = $__attributesOriginal53af403f6b2179a3039d488b8ab2a267; ?>
<?php unset($__attributesOriginal53af403f6b2179a3039d488b8ab2a267); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53af403f6b2179a3039d488b8ab2a267)): ?>
<?php $component = $__componentOriginal53af403f6b2179a3039d488b8ab2a267; ?>
<?php unset($__componentOriginal53af403f6b2179a3039d488b8ab2a267); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal8da25fb6534e2ef288914e35c32417f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8da25fb6534e2ef288914e35c32417f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.error','data' => ['controlName' => 'sku']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['control-name' => 'sku']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8da25fb6534e2ef288914e35c32417f8)): ?>
<?php $attributes = $__attributesOriginal8da25fb6534e2ef288914e35c32417f8; ?>
<?php unset($__attributesOriginal8da25fb6534e2ef288914e35c32417f8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8da25fb6534e2ef288914e35c32417f8)): ?>
<?php $component = $__componentOriginal8da25fb6534e2ef288914e35c32417f8; ?>
<?php unset($__componentOriginal8da25fb6534e2ef288914e35c32417f8); ?>
<?php endif; ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3)): ?>
<?php $attributes = $__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3; ?>
<?php unset($__attributesOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3)): ?>
<?php $component = $__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3; ?>
<?php unset($__componentOriginal7b1bc76a00ab5e7f1bf2c6429dae85a3); ?>
<?php endif; ?>

                                    <?php echo view_render_event('frooxi.admin.catalog.products.create_form.general.controls.after'); ?>

                                </div>

                                <div v-show="attributes.length">
                                    <?php echo view_render_event('frooxi.admin.catalog.products.create_form.attributes.controls.before'); ?>


                                    <div
                                        class="mb-4"
                                        v-for="attribute in attributes"
                                    >
                                        <!-- COLOR ATTRIBUTE: custom color name + picker -->
                                        <template v-if="attribute.code === 'color'">
                                            <div class="flex items-center justify-between mb-1">
                                                <label class="block text-xs font-medium leading-6 text-gray-800 dark:text-white">
                                                    {{ attribute.name }}
                                                </label>
                                                <span
                                                    class="icon-cross cursor-pointer text-lg text-gray-400 hover:text-red-500"
                                                    title="Remove this attribute"
                                                    @click="removeAttribute(attribute)"
                                                ></span>
                                            </div>

                                            <!-- Selected colors as chips -->
                                            <div class="flex min-h-[38px] flex-wrap gap-1 rounded-md border p-1.5 dark:border-gray-800 mb-2" v-if="attribute.options.length">
                                                <p
                                                    class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white text-xs"
                                                    v-for="option in attribute.options"
                                                >
                                                    <span
                                                        v-if="option.swatch_value"
                                                        class="inline-block w-3 h-3 rounded-full border border-white ltr:mr-1.5 rtl:ml-1.5"
                                                        :style="{ background: option.swatch_value }"
                                                    ></span>
                                                    {{ option.name }}
                                                    <span
                                                        class="icon-cross cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                                        @click="removeOption(option)"
                                                    ></span>
                                                </p>
                                            </div>

                                            <!-- Add color form -->
                                            <div class="flex gap-2 items-end">
                                                <div class="flex-1">
                                                    <label class="block text-[11px] text-gray-500 mb-0.5">Color Name</label>
                                                    <input
                                                        type="text"
                                                        v-model="newColorName"
                                                        placeholder="e.g. Navy Blue"
                                                        class="w-full rounded border border-gray-200 dark:border-gray-700 px-2.5 py-1.5 text-sm dark:bg-gray-900 dark:text-white"
                                                        @keydown.enter.prevent="addCustomColor(attribute)"
                                                    />
                                                </div>
                                                <div class="w-24">
                                                    <label class="block text-[11px] text-gray-500 mb-0.5">Color Code</label>
                                                    <div class="flex items-center gap-1">
                                                        <input
                                                            type="color"
                                                            v-model="newColorCode"
                                                            class="w-9 h-9 rounded border border-gray-200 dark:border-gray-700 cursor-pointer p-0.5"
                                                        />
                                                        <input
                                                            type="text"
                                                            v-model="newColorCode"
                                                            placeholder="#000000"
                                                            class="w-full rounded border border-gray-200 dark:border-gray-700 px-2 py-1.5 text-sm dark:bg-gray-900 dark:text-white font-mono"
                                                        />
                                                    </div>
                                                </div>
                                                <button
                                                    type="button"
                                                    class="secondary-button h-9 px-3 whitespace-nowrap"
                                                    @click="addCustomColor(attribute)"
                                                >
                                                    + Add Color
                                                </button>
                                            </div>
                                        </template>

                                        <!-- SIZE ATTRIBUTE: button → size picker popup -->
                                        <template v-else-if="attribute.code === 'size'">
                                            <div class="flex items-center justify-between mb-1">
                                                <label class="block text-xs font-medium leading-6 text-gray-800 dark:text-white">
                                                    {{ attribute.name }}
                                                </label>
                                                <span
                                                    class="icon-cross cursor-pointer text-lg text-gray-400 hover:text-red-500"
                                                    title="Remove this attribute"
                                                    @click="removeAttribute(attribute)"
                                                ></span>
                                            </div>

                                            <!-- Selected sizes as chips -->
                                            <div class="flex min-h-[38px] flex-wrap gap-1 rounded-md border p-1.5 dark:border-gray-800 mb-2">
                                                <p
                                                    class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white text-xs"
                                                    v-for="option in attribute.options"
                                                >
                                                    {{ option.name }}
                                                    <span
                                                        class="icon-cross cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                                        @click="removeOption(option)"
                                                    ></span>
                                                </p>
                                                <p v-if="! attribute.options.length" class="text-xs text-gray-400 px-1 py-1">No sizes selected</p>
                                            </div>

                                            <!-- Open size picker button -->
                                            <button
                                                type="button"
                                                class="secondary-button text-sm"
                                                @click="openSizePicker(attribute)"
                                            >
                                                Select Sizes
                                            </button>
                                        </template>

                                        <!-- OTHER ATTRIBUTES: default chips -->
                                        <template v-else>
                                            <div class="flex items-center justify-between mb-1">
                                                <label class="block text-xs font-medium leading-6 text-gray-800 dark:text-white">
                                                    {{ attribute.name }}
                                                </label>
                                                <span
                                                    class="icon-cross cursor-pointer text-lg text-gray-400 hover:text-red-500"
                                                    title="Remove this attribute"
                                                    @click="removeAttribute(attribute)"
                                                ></span>
                                            </div>
                                            <div class="flex min-h-[38px] flex-wrap gap-1 rounded-md border p-1.5 dark:border-gray-800">
                                                <p
                                                    class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white"
                                                    v-for="option in attribute.options"
                                                >
                                                    {{ option.name }}
                                                    <span
                                                        class="icon-cross cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                                        @click="removeOption(option)"
                                                    ></span>
                                                </p>
                                            </div>
                                        </template>
                                    </div>

                                    <?php echo view_render_event('frooxi.admin.catalog.products.create_form.attributes.controls.after'); ?>

                                </div>

                                <!-- Size Picker Modal (inline overlay) -->
                                <div
                                    v-if="showSizePicker"
                                    class="fixed inset-0 z-[9999] flex items-center justify-center bg-black bg-opacity-50"
                                    @click.self="showSizePicker = false"
                                >
                                    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-2xl w-full max-w-2xl mx-4 p-6">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">Select Sizes</h3>
                                            <button type="button" class="text-gray-400 hover:text-gray-600" @click="showSizePicker = false">
                                                <span class="icon-cross text-2xl"></span>
                                            </button>
                                        </div>

                                        <div class="flex flex-wrap gap-2 max-h-72 overflow-y-auto mb-4">
                                            <button
                                                type="button"
                                                v-for="option in sizePickerOptions"
                                                :key="option.id"
                                                class="px-3 py-1.5 rounded text-sm font-semibold border-2 transition-all"
                                                :class="isSizeSelected(option) ? 'bg-gray-800 text-white border-gray-800' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600 hover:border-gray-600'"
                                                @click="toggleSizeOption(option)"
                                            >
                                                {{ option.name }}
                                            </button>
                                        </div>

                                        <div class="flex justify-end gap-2">
                                            <button type="button" class="transparent-button hover:bg-gray-200 dark:hover:bg-gray-800 dark:text-white" @click="showSizePicker = false">Cancel</button>
                                            <button type="button" class="primary-button" @click="confirmSizes">Done</button>
                                        </div>
                                    </div>
                                </div>
                             <?php $__env->endSlot(); ?>

                            <!-- Modal Footer -->
                             <?php $__env->slot('footer', null, []); ?> 
                                <div class="flex items-center gap-x-2.5">
                                    <!-- Back Button -->
                                    <?php if (isset($component)) { $__componentOriginal989f82b74d189698d771eef298c02d90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal989f82b74d189698d771eef298c02d90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.button.index','data' => ['buttonType' => 'button','class' => 'transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800','title' => trans('admin::app.catalog.products.index.create.back-btn'),'vIf' => 'attributes.length','@click' => 'attributes = []']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button-type' => 'button','class' => 'transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.catalog.products.index.create.back-btn')),'v-if' => 'attributes.length','@click' => 'attributes = []']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal989f82b74d189698d771eef298c02d90)): ?>
<?php $attributes = $__attributesOriginal989f82b74d189698d771eef298c02d90; ?>
<?php unset($__attributesOriginal989f82b74d189698d771eef298c02d90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal989f82b74d189698d771eef298c02d90)): ?>
<?php $component = $__componentOriginal989f82b74d189698d771eef298c02d90; ?>
<?php unset($__componentOriginal989f82b74d189698d771eef298c02d90); ?>
<?php endif; ?>

                                    <!-- Save Button -->
                                    <?php if (isset($component)) { $__componentOriginal989f82b74d189698d771eef298c02d90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal989f82b74d189698d771eef298c02d90 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.button.index','data' => ['buttonType' => 'button','class' => 'primary-button','title' => trans('admin::app.catalog.products.index.create.save-btn'),':loading' => 'isLoading',':disabled' => 'isLoading || (attributes.length && ! hasValidSelection())','@click' => 'attributes.length ? submitConfigurable() : $el.closest(\'form\').requestSubmit()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button-type' => 'button','class' => 'primary-button','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.catalog.products.index.create.save-btn')),':loading' => 'isLoading',':disabled' => 'isLoading || (attributes.length && ! hasValidSelection())','@click' => 'attributes.length ? submitConfigurable() : $el.closest(\'form\').requestSubmit()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal989f82b74d189698d771eef298c02d90)): ?>
<?php $attributes = $__attributesOriginal989f82b74d189698d771eef298c02d90; ?>
<?php unset($__attributesOriginal989f82b74d189698d771eef298c02d90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal989f82b74d189698d771eef298c02d90)): ?>
<?php $component = $__componentOriginal989f82b74d189698d771eef298c02d90; ?>
<?php unset($__componentOriginal989f82b74d189698d771eef298c02d90); ?>
<?php endif; ?>
                                </div>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal09768308838b828c7799162f44758281)): ?>
<?php $attributes = $__attributesOriginal09768308838b828c7799162f44758281; ?>
<?php unset($__attributesOriginal09768308838b828c7799162f44758281); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal09768308838b828c7799162f44758281)): ?>
<?php $component = $__componentOriginal09768308838b828c7799162f44758281; ?>
<?php unset($__componentOriginal09768308838b828c7799162f44758281); ?>
<?php endif; ?>
                    </form>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $attributes = $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $component = $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>
            </div>
        </script>

        <script type="module">
            app.component('v-create-product-form', {
                template: '#v-create-product-form-template',

                data() {
                    return {
                        attributes: [],

                        superAttributes: {},

                        isLoading: false,

                        // Custom color inputs
                        newColorName: '',
                        newColorCode: '#000000',

                        // Size picker state
                        showSizePicker: false,
                        sizePickerAttribute: null,
                        sizePickerOptions: [],
                        tempSelectedSizes: [],
                    };
                },

                methods: {
                    create(params, { resetForm, resetField, setErrors }) {
                        this.isLoading = true;

                        this.attributes.forEach(attribute => {
                            params.super_attributes ||= {};

                            params.super_attributes[attribute.code] = this.superAttributes[attribute.code];
                        });

                        this.$axios.post("<?php echo e(route('admin.catalog.products.store')); ?>", params)
                            .then((response) => {
                                this.isLoading = false;

                                if (response.data.data.redirect_url) {
                                    window.location.href = response.data.data.redirect_url;
                                } else {
                                    // Reset all selections when attributes are first loaded
                                    this.sizePickerOptions = [];

                                    const rawAttributes = response.data.data.attributes;

                                    rawAttributes.forEach(attr => {
                                        if (attr.code === 'size') {
                                            // Store all available size options for the picker, start with none selected
                                            this.sizePickerOptions = attr.options;
                                            attr.options = [];
                                        } else if (attr.code === 'color') {
                                            // Start with no colors selected — user adds custom ones
                                            attr.options = [];
                                        }
                                    });

                                    this.attributes = rawAttributes;
                                    this.setSuperAttributes();
                                }
                            })
                            .catch(error => {
                                this.isLoading = false;

                                if (error.response.status == 422) {
                                    setErrors(error.response.data.errors);
                                }
                            });
                    },

                    removeOption(option) {
                        this.attributes.forEach(attribute => {
                            attribute.options = attribute.options.filter(item => item.id != option.id);
                        });

                        // Remove attributes that have no options left
                        // (color and size no longer get a special pass — user must explicitly keep them)
                        this.attributes = this.attributes.filter(attribute => attribute.options.length > 0);

                        this.setSuperAttributes();
                    },

                    removeAttribute(attribute) {
                        this.attributes = this.attributes.filter(a => a.code !== attribute.code);
                        this.setSuperAttributes();
                    },

                    setSuperAttributes() {
                        this.superAttributes = {};

                        this.attributes.forEach(attribute => {
                            this.superAttributes[attribute.code] = [];

                            attribute.options.forEach(option => {
                                this.superAttributes[attribute.code].push(option.id);
                            });
                        });
                    },

                    // ─── Custom Color Logic ───────────────────────────────────────
                    addCustomColor(attribute) {
                        const name = this.newColorName.trim();
                        const code = this.newColorCode.trim();

                        if (! name) {
                            this.$emitter.emit('add-flash', { type: 'warning', message: 'Please enter a color name' });
                            return;
                        }

                        // Check duplicate by name in current list
                        const exists = attribute.options.find(o => o.name.toLowerCase() === name.toLowerCase());
                        if (exists) {
                            this.$emitter.emit('add-flash', { type: 'warning', message: 'Color "' + name + '" is already added' });
                            return;
                        }

                        // Call API to persist the color option and get real DB ID
                        this.$axios.post("<?php echo e(route('admin.api.attributes.color-options')); ?>", {
                            name: name,
                            swatch_value: code,
                        })
                        .then(response => {
                            const opt = response.data.data;

                            attribute.options.push({
                                id: opt.id,
                                name: opt.name,
                                swatch_value: opt.swatch_value || code || null,
                            });

                            this.superAttributes[attribute.code] = this.superAttributes[attribute.code] || [];
                            this.superAttributes[attribute.code].push(opt.id);

                            this.newColorName = '';
                            this.newColorCode = '#000000';
                        })
                        .catch(() => {
                            this.$emitter.emit('add-flash', { type: 'error', message: 'Failed to save color. Please try again.' });
                        });
                    },

                    // ─── Size Picker Logic ────────────────────────────────────────
                    openSizePicker(attribute) {
                        this.sizePickerAttribute = attribute;
                        this.tempSelectedSizes = [...attribute.options];

                        // If size options are already loaded from the attribute response, use them directly
                        if (this.sizePickerOptions.length) {
                            this.showSizePicker = true;
                            return;
                        }

                        // Fallback: fetch from API
                        this.$axios.get("<?php echo e(route('admin.api.attributes.options')); ?>")
                            .then(response => {
                                this.sizePickerOptions = (response.data.data && response.data.data.size)
                                    ? response.data.data.size
                                    : [];
                            })
                            .catch(() => {
                                this.sizePickerOptions = attribute.options;
                            })
                            .finally(() => {
                                this.showSizePicker = true;
                            });

                        return; // will open after fetch
                    },

                    isSizeSelected(option) {
                        return this.tempSelectedSizes.some(s => s.id == option.id);
                    },

                    toggleSizeOption(option) {
                        const idx = this.tempSelectedSizes.findIndex(s => s.id == option.id);
                        if (idx >= 0) {
                            this.tempSelectedSizes.splice(idx, 1);
                        } else {
                            this.tempSelectedSizes.push(option);
                        }
                    },

                    confirmSizes() {
                        if (this.sizePickerAttribute) {
                            this.sizePickerAttribute.options = [...this.tempSelectedSizes];
                            this.setSuperAttributes();
                        }
                        this.showSizePicker = false;
                    },

                    // ─── Validate that at least one attribute has a selection ─────
                    hasValidSelection() {
                        return this.attributes.length > 0 && this.attributes.some(attr => {
                            const ids = this.superAttributes[attr.code];
                            return ids && ids.length > 0;
                        });
                    },

                    // ─── Submit the configurable product form ─────────────────────
                    submitConfigurable() {
                        if (this.isLoading) return;

                        // Build super_attributes from current selections
                        const superAttrs = {};
                        this.attributes.forEach(attr => {
                            const ids = this.superAttributes[attr.code];
                            if (ids && ids.length > 0) {
                                superAttrs[attr.code] = ids;
                            }
                        });

                        if (Object.keys(superAttrs).length === 0) {
                            this.$emitter.emit('add-flash', { type: 'warning', message: 'Please select at least one size or color.' });
                            return;
                        }

                        this.isLoading = true;

                        // Gather the existing form params (type, sku, attribute_family_id)
                        // They are stored in hidden inputs inside the form
                        const form = this.$el.querySelector('form');
                        const formData = new FormData(form);
                        const params = {};
                        formData.forEach((value, key) => { params[key] = value; });

                        params.super_attributes = superAttrs;

                        this.$axios.post("<?php echo e(route('admin.catalog.products.store')); ?>", params)
                            .then((response) => {
                                this.isLoading = false;

                                if (response.data.data.redirect_url) {
                                    window.location.href = response.data.data.redirect_url;
                                } else {
                                    this.$emitter.emit('add-flash', { type: 'error', message: 'Unexpected response from server.' });
                                }
                            })
                            .catch(error => {
                                this.isLoading = false;
                                const msg = error.response?.data?.message || 'Failed to save product. Please try again.';
                                this.$emitter.emit('add-flash', { type: 'error', message: msg });
                            });
                    },
                }
            })
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
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Admin/src/resources/views/catalog/products/index.blade.php ENDPATH**/ ?>