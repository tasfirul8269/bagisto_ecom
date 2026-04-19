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
        Hero Carousel
     <?php $__env->endSlot(); ?>

    <v-hero-carousel>
        <div class="flex items-center justify-between">
            <p class="text-xl font-bold text-gray-800 dark:text-white">
                Hero Carousel
            </p>

            <div class="shimmer h-[40px] w-[140px] rounded-md"></div>
        </div>

        <div class="mt-7 flex items-center justify-between border-b pb-4 dark:border-gray-800">
            <div class="shimmer h-[38px] w-[200px] rounded-md"></div>
        </div>

        <div class="mt-5 grid gap-4">
            <div class="shimmer h-[100px] w-full rounded-md"></div>
            <div class="shimmer h-[100px] w-full rounded-md"></div>
            <div class="shimmer h-[100px] w-full rounded-md"></div>
        </div>
    </v-hero-carousel>

    <?php if (! $__env->hasRenderedOnce('ffa99e70-ffc2-4a41-903c-3ad6f34be711')): $__env->markAsRenderedOnce('ffa99e70-ffc2-4a41-903c-3ad6f34be711');
$__env->startPush('scripts'); ?>
        <script type="text/x-template" id="v-hero-carousel-template">
            <div>
                <div class="flex items-center justify-between">
                    <p class="text-xl font-bold text-gray-800 dark:text-white">
                        Hero Carousel
                    </p>

                    <div
                        class="primary-button"
                        @click="selectedSlide = {}; $refs.slideModal.toggle()"
                    >
                        Add New Slide
                    </div>
                </div>

                <div class="mt-7 flex items-center justify-between border-b pb-4 dark:border-gray-800">
                    <div class="flex items-center gap-x-2.5">
                        <select
                            class="custom-select h-[40px] w-[200px] cursor-pointer rounded-md border border-gray-300 bg-white px-3 py-1.5 text-sm font-normal text-gray-600 outline-none transition-all hover:border-gray-400 focus:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                            v-model="channelId"
                            @change="changeChannel"
                        >
                            <option
                                v-for="channel in channels"
                                :value="channel.id"
                            >
                                {{ channel.name }}
                            </option>
                        </select>
                    </div>
                </div>

                <!-- Slide List -->
                <div class="mt-5 grid gap-4">
                    <div
                        v-if="slides.length"
                        class="box-shadow relative overflow-hidden rounded bg-white dark:bg-gray-900"
                    >
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm">
                                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-800 dark:text-gray-400">
                                    <tr>
                                        <th class="px-6 py-3">Order</th>
                                        <th class="px-6 py-3">Media</th>
                                        <th class="px-6 py-3">Type</th>
                                        <th class="px-6 py-3">Title/Link</th>
                                        <th class="px-6 py-3">Status</th>
                                        <th class="px-6 py-3 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(slide, index) in slides"
                                        :key="slide.id"
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-800 dark:bg-gray-900 dark:hover:bg-gray-800"
                                    >
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <i class="icon-drag cursor-move text-xl text-gray-400"></i>
                                                {{ slide.sort_order }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="h-16 w-32 overflow-hidden rounded border dark:border-gray-700">
                                                <img
                                                    v-if="slide.type === 'image'"
                                                    :src="slide.media_url"
                                                    class="h-full w-full object-cover"
                                                />
                                                <video
                                                    v-else
                                                    :src="slide.media_url"
                                                    class="h-full w-full object-cover"
                                                    muted
                                                ></video>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium"
                                                :class="slide.type === 'image' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800'"
                                            >
                                                {{ slide.type.toUpperCase() }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex flex-col">
                                                <span class="font-medium text-gray-900 dark:text-white">{{ slide.title || 'No Title' }}</span>
                                                <span class="text-xs text-gray-500">
                                                    {{ slide.category_name ? 'Category: ' + slide.category_name : 'No Category' }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <label class="relative inline-flex cursor-pointer items-center">
                                                <input
                                                    type="checkbox"
                                                    :checked="slide.status"
                                                    @change="toggleStatus(slide)"
                                                    class="peer sr-only"
                                                >
                                                <div class="peer h-5 w-9 rounded-full bg-gray-200 after:absolute after:left-[2px] after:top-[2px] after:h-4 after:w-4 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800"></div>
                                            </label>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex justify-end gap-3 text-lg">
                                                <i
                                                    class="icon-edit cursor-pointer text-blue-600"
                                                    @click="editSlide(slide)"
                                                ></i>
                                                <i
                                                    class="icon-delete cursor-pointer text-red-600"
                                                    @click="deleteSlide(slide.id)"
                                                ></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div
                        v-else
                        class="grid justify-center justify-items-center gap-3.5 px-2.5 py-10"
                    >
                        <img
                            class="h-[120px] w-[120px] p-2 dark:mix-blend-exclusion dark:invert"
                            src="<?php echo e(frooxi_asset('images/empty-placeholders/default.svg')); ?>"
                        >
                        <p class="text-base font-semibold text-gray-400">No slides found for this channel.</p>
                    </div>
                </div>

                <!-- Add/Edit Modal -->
                <?php if (isset($component)) { $__componentOriginal09768308838b828c7799162f44758281 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal09768308838b828c7799162f44758281 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.modal.index','data' => ['ref' => 'slideModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'slideModal']); ?>
                     <?php $__env->slot('header', null, []); ?> 
                        <p class="text-lg font-bold text-gray-800 dark:text-white">
                            {{ selectedSlide.id ? 'Edit Slide' : 'Add New Slide' }}
                        </p>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('content', null, []); ?> 
                        <div class="grid gap-4">
                            <!-- Type -->
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-800 dark:text-white required">Type</label>
                                <div class="flex items-center gap-4">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" value="image" v-model="selectedSlide.type" class="w-4 h-4 text-blue-600">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Image</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="radio" value="video" v-model="selectedSlide.type" class="w-4 h-4 text-blue-600">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Video</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Title -->
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Title <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'text','name' => 'title','vModel' => 'selectedSlide.title','placeholder' => 'Slide Title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'title','v-model' => 'selectedSlide.title','placeholder' => 'Slide Title']); ?>
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

                            <!-- Category Selection -->
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Category <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8)): ?>
<?php $attributes = $__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8; ?>
<?php unset($__attributesOriginal8378211f70f8c39b16d47cecdac9c7c8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8378211f70f8c39b16d47cecdac9c7c8)): ?>
<?php $component = $__componentOriginal8378211f70f8c39b16d47cecdac9c7c8; ?>
<?php unset($__componentOriginal8378211f70f8c39b16d47cecdac9c7c8); ?>
<?php endif; ?>
                                <select
                                    class="custom-select w-full cursor-pointer rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-600 outline-none transition-all hover:border-gray-400 focus:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                                    v-model="selectedSlide.category_id"
                                    style="font-family: 'Courier New', monospace; line-height: 1.6;"
                                >
                                    <option value="" style="font-weight: 600;">— Select a category (optional) —</option>
                                    <template v-for="category in categories" :key="category.id">
                                        <option
                                            v-if="category.level === 0"
                                            :value="category.id"
                                            style="font-weight: 600;"
                                            v-text="'📁 ' + category.name"
                                        >
                                        </option>
                                        <option
                                            v-else-if="category.level === 1"
                                            :value="category.id"
                                            style="padding-left: 20px;"
                                            v-text="'  └─ ' + category.name"
                                        >
                                        </option>
                                        <option
                                            v-else
                                            :value="category.id"
                                            v-text="getCategoryIndent(category) + category.name"
                                        >
                                        </option>
                                    </template>
                                </select>
                                <p class="text-xs text-gray-500 mt-1">
                                    When clicked, this banner will redirect to the selected category page.
                                </p>
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

                            <!-- Media Upload -->
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-gray-800 dark:text-white" :class="!selectedSlide.id ? 'required' : ''">
                                    {{ selectedSlide.type === 'video' ? 'Video File' : 'Image File' }}
                                </label>
                                <input
                                    type="file"
                                    @change="onFileChange"
                                    class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-600 outline-none transition-all hover:border-gray-400 focus:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                                    :accept="selectedSlide.type === 'video' ? 'video/*' : 'image/*'"
                                />
                                <p class="text-xs text-gray-500">
                                    {{ selectedSlide.type === 'video' ? 'Accepted formats: MP4, WebM. Max size: 50MB.' : 'Accepted formats: JPG, PNG, WebP.' }}
                                </p>
                            </div>

                            <!-- Preview -->
                            <div v-if="selectedSlide.id || previewUrl" class="mt-2">
                                <p class="text-xs font-medium text-gray-500 mb-2">Preview:</p>
                                <div class="h-40 w-full overflow-hidden rounded border dark:border-gray-700 bg-gray-100 dark:bg-gray-800">
                                    <img
                                        v-if="selectedSlide.type === 'image'"
                                        :src="previewUrl || selectedSlide.media_url"
                                        class="h-full w-full object-contain"
                                    />
                                    <video
                                        v-else
                                        :src="previewUrl || selectedSlide.media_url"
                                        class="h-full w-full object-contain"
                                        controls
                                    ></video>
                                </div>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>

                     <?php $__env->slot('footer', null, []); ?> 
                        <button
                            class="primary-button"
                            @click="saveSlide"
                            :disabled="isProcessing"
                        >
                            {{ isProcessing ? 'Processing...' : 'Save Slide' }}
                        </button>
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
            </div>
        </script>

        <script type="module">
            app.component('v-hero-carousel', {
                template: '#v-hero-carousel-template',

                data() {
                    return {
                        slides: <?php echo json_encode($slides, 15, 512) ?>,
                        channels: <?php echo json_encode($channels, 15, 512) ?>,
                        channelId: <?php echo json_encode($channelId, 15, 512) ?>,
                        categories: <?php echo json_encode($categories, 15, 512) ?>,
                        selectedSlide: {
                            type: 'image',
                            category_id: ''
                        },
                        previewUrl: null,
                        selectedFile: null,
                        isProcessing: false,
                    }
                },

                methods: {
                    changeChannel() {
                        window.location.href = "<?php echo e(route('admin.storefront.hero_carousel.index')); ?>?channel_id=" + this.channelId;
                    },

                    getCategoryIndent(category) {
                        if (category.level === 0 || category.level === 1) {
                            return ''; // Handled in template
                        }
                        
                        // For level 2+, create proper tree indentation
                        let indent = '';
                        for (let i = 1; i < category.level; i++) {
                            indent += '     '; // 5 spaces for each level
                        }
                        return indent + '└─ ';
                    },

                    onFileChange(e) {
                        const file = e.target.files[0];
                        if (file) {
                            this.selectedFile = file;
                            this.previewUrl = URL.createObjectURL(file);
                        }
                    },

                    async saveSlide() {
                        if (!this.selectedSlide.id && !this.selectedFile) {
                            this.$emitter.emit('add-flash', { type: 'error', message: 'Please select a file.' });
                            return;
                        }

                        this.isProcessing = true;
                        const formData = new FormData();
                        
                        if (this.selectedFile) {
                            formData.append('media_file', this.selectedFile);
                        }
                        
                        formData.append('type', this.selectedSlide.type || 'image');
                        formData.append('title', this.selectedSlide.title || '');
                        formData.append('category_id', this.selectedSlide.category_id || '');
                        formData.append('channel_id', this.channelId);

                        if (this.selectedSlide.id) {
                            formData.append('_method', 'PUT');
                        }

                        try {
                            const url = this.selectedSlide.id 
                                ? "<?php echo e(route('admin.storefront.hero_carousel.update', ':id')); ?>".replace(':id', this.selectedSlide.id)
                                : "<?php echo e(route('admin.storefront.hero_carousel.store')); ?>";

                            const response = await axios.post(url, formData, {
                                headers: { 'Content-Type': 'multipart/form-data' }
                            });

                            this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            
                            // Simple reload to refresh the list
                            window.location.reload();
                        } catch (error) {
                            const message = error.response?.data?.message || 'Something went wrong';
                            this.$emitter.emit('add-flash', { type: 'error', message });
                        } finally {
                            this.isProcessing = false;
                        }
                    },

                    editSlide(slide) {
                        this.selectedSlide = { ...slide };
                        this.previewUrl = null;
                        this.selectedFile = null;
                        this.$refs.slideModal.toggle();
                    },

                    async deleteSlide(id) {
                        if (!confirm('Are you sure you want to delete this slide?')) return;

                        try {
                            const response = await axios.delete("<?php echo e(route('admin.storefront.hero_carousel.destroy', ':id')); ?>".replace(':id', id));
                            this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            this.slides = this.slides.filter(s => s.id !== id);
                        } catch (error) {
                            this.$emitter.emit('add-flash', { type: 'error', message: 'Failed to delete slide.' });
                        }
                    },

                    async toggleStatus(slide) {
                        slide.status = !slide.status;
                        try {
                             await axios.put("<?php echo e(route('admin.storefront.hero_carousel.update', ':id')); ?>".replace(':id', slide.id), {
                                status: slide.status
                            });
                            this.$emitter.emit('add-flash', { type: 'success', message: 'Status updated.' });
                        } catch (error) {
                            slide.status = !slide.status;
                            this.$emitter.emit('add-flash', { type: 'error', message: 'Failed to update status.' });
                        }
                    }
                }
            });
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
<?php /**PATH D:\Frooxi new\Iqbal Project\NextOutfit\packages\Webkul\Admin\src/resources/views/storefront/hero-carousel/index.blade.php ENDPATH**/ ?>