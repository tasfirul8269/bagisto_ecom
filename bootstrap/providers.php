<?php

use App\Providers\AppServiceProvider;
use Webkul\Admin\Providers\AdminServiceProvider;
use Webkul\Attribute\Providers\AttributeServiceProvider;
use Webkul\Category\Providers\CategoryServiceProvider;
use Webkul\Checkout\Providers\CheckoutServiceProvider;
use Webkul\Core\Providers\CoreServiceProvider;
use Webkul\Core\Providers\EnvValidatorServiceProvider;
use Webkul\Customer\Providers\CustomerServiceProvider;
use Webkul\DataGrid\Providers\DataGridServiceProvider;
use Webkul\Installer\Providers\InstallerServiceProvider;
use Webkul\Inventory\Providers\InventoryServiceProvider;
use Webkul\Payment\Providers\PaymentServiceProvider;
use Webkul\Product\Providers\ProductServiceProvider;
use Webkul\Sales\Providers\SalesServiceProvider;
use Webkul\Shipping\Providers\ShippingServiceProvider;
use Webkul\Shop\Providers\ShopServiceProvider;
use Webkul\Theme\Providers\ThemeServiceProvider;
use Webkul\User\Providers\UserServiceProvider;

return [
    /**
     * Application service providers.
     */
    AppServiceProvider::class,

    /**
     * Webkul's service providers.
     */
    AdminServiceProvider::class,
    AttributeServiceProvider::class,
    CategoryServiceProvider::class,
    CheckoutServiceProvider::class,
    CoreServiceProvider::class,
    EnvValidatorServiceProvider::class,
    CustomerServiceProvider::class,
    DataGridServiceProvider::class,
    InstallerServiceProvider::class,
    InventoryServiceProvider::class,
    PaymentServiceProvider::class,
    ProductServiceProvider::class,
    SalesServiceProvider::class,
    ShippingServiceProvider::class,
    ShopServiceProvider::class,
    ThemeServiceProvider::class,
    UserServiceProvider::class,
];
