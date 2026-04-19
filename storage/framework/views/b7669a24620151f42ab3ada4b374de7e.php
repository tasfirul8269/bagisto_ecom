<v-shimmer-image <?php echo e($attributes); ?>>
    <div <?php echo e($attributes->merge(['class' => 'shimmer'])); ?>></div>
</v-shimmer-image>

<?php if (! $__env->hasRenderedOnce('3ca8e30f-2c6a-446f-850f-07977cedd3b0')): $__env->markAsRenderedOnce('3ca8e30f-2c6a-446f-850f-07977cedd3b0');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-shimmer-image-template"
    >
        <div
            :id="'image-shimmer-' + $.uid"
            class="shimmer"
            v-bind="$attrs"
            v-if="isLoading"
        >
        </div>

        <img
            v-bind="$attrs"
            :data-src="src"
            :id="'image-' + $.uid"
            @load="onLoad"
            v-show="! isLoading"
            v-if="lazy"
        >

        <img
            v-bind="$attrs"
            :data-src="src"
            :id="'image-' + $.uid"
            @load="onLoad"
            v-else
            v-show="! isLoading"
        >
    </script>

    <script type="module">
        app.component('v-shimmer-image', {
            template: '#v-shimmer-image-template',

            props: {
                lazy: {
                    type: Boolean,
                    default: true,
                },

                src: {
                    type: String,
                    default: '',
                },
            },

            data() {
                return {
                    isLoading: true,
                };
            },

            mounted() {
                let self = this;

                if (! this.lazy) {
                    return;
                }

                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = document.getElementById('image-' + self.$.uid);

                            lazyImage.src = lazyImage.dataset.src;

                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImageObserver.observe(document.getElementById('image-shimmer-' + this.$.uid));
            },

            methods: {
                onLoad() {
                    this.isLoading = false;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH D:\Frooxi new\Iqbal Project\NextOutfit\packages\Webkul\Shop\src/resources/views/components/media/images/lazy.blade.php ENDPATH**/ ?>