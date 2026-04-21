<?php echo view_render_event('frooxi.shop.checkout.onepage.address.before'); ?>


<div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;margin-bottom:20px;overflow:hidden;">
    <div style="display:flex;align-items:center;gap:14px;padding:20px 24px;border-bottom:1px solid #f3f4f6;">
        <div style="width:28px;height:28px;border-radius:50%;background:#111;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <span style="font-family:'Montserrat',sans-serif;font-size:12px;font-weight:700;color:#fff;">1</span>
        </div>
        <h2 style="font-family:'Montserrat',sans-serif;font-size:13px;font-weight:700;letter-spacing:.18em;text-transform:uppercase;color:#111;margin:0;">
            <?php echo app('translator')->get('shop::app.checkout.onepage.address.title'); ?>
        </h2>
    </div>

    <div style="padding:24px;">
        <!-- If the customer is guest -->
        <template v-if="cart.is_guest">
            <?php echo $__env->make('shop::checkout.onepage.address.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </template>

        <!-- If the customer is logged in -->
        <template v-else>
            <?php echo $__env->make('shop::checkout.onepage.address.customer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </template>
    </div>
</div>

<?php echo view_render_event('frooxi.shop.checkout.onepage.address.after'); ?><?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/onepage/address.blade.php ENDPATH**/ ?>