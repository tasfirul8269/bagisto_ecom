<?php

use Webkul\Admin\Providers\ModuleServiceProvider;
use Webkul\Core\CoreConvention;

return [

    /**
     * The path of the convention file.
     */
    'convention' => CoreConvention::class,

    /**
     * Example:
     *
     * VendorA\ModuleX\Providers\ModuleServiceProvider::class,
     * VendorB\ModuleY\Providers\ModuleServiceProvider::class,
     */
    'modules' => [
        ModuleServiceProvider::class,
        Webkul\Attribute\Providers\ModuleServiceProvider::class,
        Webkul\Category\Providers\ModuleServiceProvider::class,
        Webkul\Checkout\Providers\ModuleServiceProvider::class,
        Webkul\Core\Providers\ModuleServiceProvider::class,
        Webkul\Customer\Providers\ModuleServiceProvider::class,
        Webkul\DataGrid\Providers\ModuleServiceProvider::class,
        Webkul\Inventory\Providers\ModuleServiceProvider::class,
        Webkul\Payment\Providers\ModuleServiceProvider::class,
        Webkul\Product\Providers\ModuleServiceProvider::class,
        Webkul\Sales\Providers\ModuleServiceProvider::class,
        Webkul\Shipping\Providers\ModuleServiceProvider::class,
        Webkul\Shop\Providers\ModuleServiceProvider::class,
        Webkul\Theme\Providers\ModuleServiceProvider::class,
        Webkul\User\Providers\ModuleServiceProvider::class,
    ],
];
