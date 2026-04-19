<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot>

    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
        <p class="font-serif text-2xl font-bold text-gray-900 dark:text-white">
            @lang('admin::app.catalog.products.index.title')
        </p>

        <div class="flex items-center gap-x-2.5">
            <!-- Export Modal -->
            <x-admin::datagrid.export
                :src="route('admin.catalog.products.index')"
                class="secondary-button"
            />

            {!! view_render_event('frooxi.admin.catalog.products.create.before') !!}

            @if (bouncer()->hasPermission('catalog.products.create'))
                <v-create-product-form>
                    <button
                        type="button"
                        class="primary-button"
                    >
                        @lang('admin::app.catalog.products.index.create-btn')
                    </button>
                </v-create-product-form>
            @endif

            {!! view_render_event('frooxi.admin.catalog.products.create.after') !!}
        </div>
    </div>

    {!! view_render_event('frooxi.admin.catalog.products.list.before') !!}

    <!-- Datagrid -->
    <x-admin::datagrid
        :src="route('admin.catalog.products.index')"
        :isMultiRow="true"
    >
        <!-- Datagrid Header -->
        @php
            $hasPermission = bouncer()->hasPermission('catalog.products.edit') || bouncer()->hasPermission('catalog.products.delete');
        @endphp

        <template #header="{
            isLoading,
            available,
            applied,
            selectAll,
            sort,
            performAction
        }">
            <template v-if="isLoading">
                <x-admin::shimmer.datagrid.table.head :isMultiRow="true" />
            </template>

            <template v-else>
                <table class="w-full">
                    <thead>
                        <tr class="border-b bg-gray-50 dark:border-gray-800 dark:bg-gray-900">
                            @if ($hasPermission)
                            <th class="px-4 py-3 w-12">
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
                            @endif
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider w-24">
                                Image
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                Price
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                Quantity
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                Status
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                </table>
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
                <x-admin::shimmer.datagrid.table.body :isMultiRow="true" />
            </template>

            <!-- Table View -->
            <template v-else>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <tbody>
                            <tr
                                class="border-b transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                                v-for="record in available.records"
                            >
                                <!-- Checkbox -->
                                @if ($hasPermission)
                                <td class="px-4 py-3 w-12">
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
                                @endif

                                <!-- Product Image -->
                                <td class="px-4 py-3">
                                    <div class="relative">
                                        <template v-if="record.base_image">
                                            <img
                                                class="h-16 w-16 rounded object-cover"
                                                :src='record.base_image'
                                            />
                                            <span class="absolute -bottom-1 -right-1 rounded-full bg-darkPink px-1 text-xs font-bold leading-normal text-white">
                                                @{{ record.images_count }}
                                            </span>
                                        </template>
                                        <template v-else>
                                            <div class="relative h-16 w-16 rounded border border-dashed border-gray-300 dark:border-gray-800 dark:mix-blend-exclusion dark:invert">
                                                <img src="{{ frooxi_asset('images/product-placeholders/front.svg')}}" class="h-full w-full object-cover">
                                                <p class="absolute bottom-0 w-full text-center text-[6px] font-semibold text-gray-400">
                                                    @lang('admin::app.catalog.products.index.datagrid.product-image')
                                                </p>
                                            </div>
                                        </template>
                                    </div>
                                </td>

                                <!-- Product Name & SKU -->
                                <td class="px-4 py-3">
                                    <p class="text-sm font-semibold text-gray-800 dark:text-white">
                                        @{{ record.name }}
                                    </p>
                                    <p class="text-xs text-gray-600 dark:text-gray-300 mt-1">
                                        SKU: @{{ record.sku }}
                                    </p>
                                </td>

                                <!-- Price -->
                                <td class="px-4 py-3">
                                    <p class="text-sm font-semibold text-gray-800 dark:text-white">
                                        @{{ $admin.formatPrice(record.price) }}
                                    </p>
                                </td>

                                <!-- Stock/Quantity -->
                                <td class="px-4 py-3">
                                    <div v-if="['configurable', 'bundle', 'grouped', 'booking'].includes(record.type)">
                                        <p class="text-xs text-gray-600 dark:text-gray-300">
                                            <span class="text-gray-500">N/A</span>
                                        </p>
                                    </div>
                                    <div v-else>
                                        <p
                                            class="text-xs"
                                            v-if="record.quantity > 0"
                                        >
                                            <span class="text-green-600 font-semibold">
                                                @{{ record.quantity }} in stock
                                            </span>
                                        </p>
                                        <p
                                            class="text-xs"
                                            v-else
                                        >
                                            <span class="text-red-600 font-semibold">
                                                @lang('admin::app.catalog.products.index.datagrid.out-of-stock')
                                            </span>
                                        </p>
                                    </div>
                                </td>

                                <!-- Status -->
                                <td class="px-4 py-3">
                                    <p :class="[record.status ? 'label-active': 'label-info']" class="inline-block">
                                        @{{ record.status ? "@lang('admin::app.catalog.products.index.datagrid.active')" : "@lang('admin::app.catalog.products.index.datagrid.disable')" }}
                                    </p>
                                </td>

                                <!-- Actions -->
                                <td class="px-4 py-3">
                                    <div class="flex items-center gap-2">
                                        <!-- View in Store -->
                                        <a
                                            v-if="record.url_key"
                                            :href="'{{ url('/') }}/' + record.url_key"
                                            target="_blank"
                                            class="cursor-pointer rounded-md p-1.5 text-xl transition-all hover:bg-gray-200 dark:hover:bg-gray-800 icon-eye"
                                            title="@lang('admin::app.view')"
                                        ></a>
                                        
                                        <!-- Edit & Delete Actions -->
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
    </x-admin::datagrid>

    {!! view_render_event('frooxi.admin.catalog.products.list.after') !!}

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-create-product-form-template"
        >
            <div>
                <!-- Product Create Button -->
                @if (bouncer()->hasPermission('catalog.products.create'))
                    <button
                        type="button"
                        class="primary-button"
                        @click="$refs.productCreateModal.toggle()"
                    >
                        @lang('admin::app.catalog.products.index.create-btn')
                    </button>
                @endif

                <x-admin::form
                    v-slot="{ meta, errors, handleSubmit }"
                    as="div"
                >
                    <form @submit="handleSubmit($event, create)">
                        <!-- Customer Create Modal -->
                        <x-admin::modal ref="productCreateModal">
                            <!-- Modal Header -->
                            <x-slot:header>
                                <p
                                    class="text-lg font-bold text-gray-800 dark:text-white"
                                    v-if="! attributes.length"
                                >
                                    @lang('admin::app.catalog.products.index.create.title')
                                </p>

                                <p
                                    class="text-lg font-bold text-gray-800 dark:text-white"
                                    v-else
                                >
                                    @lang('admin::app.catalog.products.index.create.configurable-attributes')
                                </p>
                            </x-slot>

                            <!-- Modal Content -->
                            <x-slot:content>
                                <div v-show="! attributes.length">
                                    {!! view_render_event('frooxi.admin.catalog.products.create_form.general.controls.before') !!}

                                    <!-- Product Type -->
                                    <x-admin::form.control-group>
                                        <x-admin::form.control-group.label class="required">
                                            @lang('admin::app.catalog.products.index.create.type')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="select"
                                            name="type"
                                            rules="required"
                                            :label="trans('admin::app.catalog.products.index.create.type')"
                                        >
                                            @foreach(config('product_types') as $key => $type)
                                                <option value="{{ $key }}">
                                                    @lang($type['name'])
                                                </option>
                                            @endforeach
                                        </x-admin::form.control-group.control>

                                        <x-admin::form.control-group.error control-name="type" />
                                    </x-admin::form.control-group>

                                    <!-- Attribute Family Id (hidden, auto-assigned to default) -->
                                    <input type="hidden" name="attribute_family_id" value="1">

                                    <!-- SKU -->
                                    <x-admin::form.control-group>
                                        <x-admin::form.control-group.label class="required">
                                            @lang('admin::app.catalog.products.index.create.sku')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="text"
                                            name="sku"
                                            ::rules="{ required: true, regex: /^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$/ }"
                                            :label="trans('admin::app.catalog.products.index.create.sku')"
                                        />

                                        <x-admin::form.control-group.error control-name="sku" />
                                    </x-admin::form.control-group>

                                    {!! view_render_event('frooxi.admin.catalog.products.create_form.general.controls.after') !!}
                                </div>

                                <div v-show="attributes.length">
                                    {!! view_render_event('frooxi.admin.catalog.products.create_form.attributes.controls.before') !!}

                                    <div
                                        class="mb-2.5"
                                        v-for="attribute in attributes"
                                    >
                                        <label
                                            class="block text-xs font-medium leading-6 text-gray-800 dark:text-white"
                                            v-text="attribute.name"
                                        >
                                        </label>

                                        <div class="flex min-h-[38px] flex-wrap gap-1 rounded-md border p-1.5 dark:border-gray-800">
                                            <p
                                                class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white"
                                                v-for="option in attribute.options"
                                            >
                                                @{{ option.name }}

                                                <span
                                                    class="icon-cross cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                                    @click="removeOption(option)"
                                                >
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                    {!! view_render_event('frooxi.admin.catalog.products.create_form.attributes.controls.after') !!}
                                </div>
                            </x-slot>

                            <!-- Modal Footer -->
                            <x-slot:footer>
                                <div class="flex items-center gap-x-2.5">
                                    <!-- Back Button -->
                                    <x-admin::button
                                        button-type="button"
                                        class="transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800"
                                        :title="trans('admin::app.catalog.products.index.create.back-btn')"
                                        v-if="attributes.length"
                                        @click="attributes = []"
                                    />

                                    <!-- Save Button -->
                                    <x-admin::button
                                        button-type="button"
                                        class="primary-button"
                                        :title="trans('admin::app.catalog.products.index.create.save-btn')"
                                        ::loading="isLoading"
                                        ::disabled="isLoading"
                                    />
                                </div>
                            </x-slot>
                        </x-admin::modal>
                    </form>
                </x-admin::form>
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
                    };
                },

                methods: {
                    create(params, { resetForm, resetField, setErrors }) {
                        this.isLoading = true;

                        this.attributes.forEach(attribute => {
                            params.super_attributes ||= {};

                            params.super_attributes[attribute.code] = this.superAttributes[attribute.code];
                        });

                        this.$axios.post("{{ route('admin.catalog.products.store') }}", params)
                            .then((response) => {
                                this.isLoading = false;

                                if (response.data.data.redirect_url) {
                                    window.location.href = response.data.data.redirect_url;
                                } else {
                                    this.attributes = response.data.data.attributes;

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

                        this.attributes = this.attributes.filter(attribute => attribute.options.length > 0);

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
                    }
                }
            })
        </script>
    @endPushOnce
</x-admin::layouts>
