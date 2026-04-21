<div style="width:400px;max-width:100%;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:28px;">
    <?php echo view_render_event('frooxi.shop.checkout.cart.summary.title.before'); ?>


    <p style="font-family:'Montserrat',sans-serif;font-size:11px;font-weight:700;letter-spacing:.22em;text-transform:uppercase;color:#9ca3af;margin:0 0 20px;" role="heading" aria-level="1">
        <?php echo app('translator')->get('shop::app.checkout.cart.summary.cart-summary'); ?>
    </p>

    <?php echo view_render_event('frooxi.shop.checkout.cart.summary.title.after'); ?>


    <div style="display:flex;flex-direction:column;gap:14px;">

        
        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.sub_total.before'); ?>


        <div style="display:flex;justify-content:space-between;align-items:center;">
            <p style="font-family:'Montserrat',sans-serif;font-size:13px;color:#6b7280;"><?php echo app('translator')->get('shop::app.checkout.cart.summary.sub-total'); ?></p>
            <p style="font-family:'Montserrat',sans-serif;font-size:13px;font-weight:600;color:#111;">{{ cart.formatted_sub_total }}</p>
        </div>

        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.sub_total.after'); ?>


        
        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.discount_amount.before'); ?>


        <div style="display:flex;justify-content:space-between;align-items:center;" v-if="cart.discount_amount && parseFloat(cart.discount_amount) > 0">
            <p style="font-family:'Montserrat',sans-serif;font-size:13px;color:#6b7280;"><?php echo app('translator')->get('shop::app.checkout.cart.summary.discount-amount'); ?></p>
            <p style="font-family:'Montserrat',sans-serif;font-size:13px;font-weight:600;color:#16a34a;">- {{ cart.formatted_discount_amount }}</p>
        </div>

        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.discount_amount.after'); ?>


        
        <div style="border-top:1px solid #111;"></div>

        
        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.grand_total.before'); ?>


        <div style="display:flex;justify-content:space-between;align-items:center;">
            <p style="font-family:'Montserrat',sans-serif;font-size:15px;font-weight:700;letter-spacing:.04em;text-transform:uppercase;color:#111;"><?php echo app('translator')->get('shop::app.checkout.cart.summary.grand-total'); ?></p>
            <p style="font-family:'Montserrat',sans-serif;font-size:18px;font-weight:700;color:#111;">{{ cart.formatted_grand_total }}</p>
        </div>

        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.grand_total.after'); ?>


        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.proceed_to_checkout.before'); ?>


        <a
            href="<?php echo e(route('shop.checkout.onepage.index')); ?>"
            style="display:block;width:100%;height:52px;line-height:52px;text-align:center;background:#111;color:#fff;border-radius:8px;font-family:'Montserrat',sans-serif;font-size:12px;font-weight:600;letter-spacing:.2em;text-transform:uppercase;text-decoration:none;margin-top:4px;"
            onmouseover="this.style.background='#333'"
            onmouseout="this.style.background='#111'"
        >
            <?php echo app('translator')->get('shop::app.checkout.cart.summary.proceed-to-checkout'); ?>
        </a>

        <?php echo view_render_event('frooxi.shop.checkout.cart.summary.proceed_to_checkout.after'); ?>


        
        <div style="display:flex;align-items:center;justify-content:center;gap:20px;margin-top:20px;padding-top:16px;border-top:1px solid #f3f4f6;">
            <div style="display:flex;align-items:center;gap:6px;">
                <span class="icon-lock text-xl" style="color:#9ca3af;"></span>
                <span style="font-family:'Montserrat',sans-serif;font-size:10px;letter-spacing:.08em;text-transform:uppercase;color:#9ca3af;">Secure Checkout</span>
            </div>
            <div style="display:flex;align-items:center;gap:6px;">
                <span class="icon-truck text-xl" style="color:#9ca3af;"></span>
                <span style="font-family:'Montserrat',sans-serif;font-size:10px;letter-spacing:.08em;text-transform:uppercase;color:#9ca3af;">Free Returns</span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto_ecom/packages/Webkul/Shop/src/resources/views/checkout/cart/summary.blade.php ENDPATH**/ ?>