<?php

use Illuminate\Support\Facades\Route;
use Webkul\Admin\Http\Controllers\Sales\OrderController;
use Webkul\Admin\Http\Controllers\Sales\PaymentMethodController;

/**
 * Sales routes.
 */
Route::prefix('sales')->group(function () {
    /**
     * Orders routes.
     */
    Route::controller(OrderController::class)->prefix('orders')->group(function () {
        Route::get('', 'index')->name('admin.sales.orders.index');
        Route::get('create/{cartId}', 'create')->name('admin.sales.orders.create');
        Route::post('create/{cartId}', 'store')->name('admin.sales.orders.store');
        Route::get('view/{id}', 'view')->name('admin.sales.orders.view');
        Route::post('cancel/{id}', 'cancel')->name('admin.sales.orders.cancel');
        Route::get('reorder/{id}', 'reorder')->name('admin.sales.orders.reorder');
        Route::post('comment/{order_id}', 'comment')->name('admin.sales.orders.comment');
        Route::post('update-status/{id}', 'updateStatus')->name('admin.sales.orders.update_status');
        Route::get('search', 'search')->name('admin.sales.orders.search');
    });

    /**
     * Payment methods routes.
     */
    Route::controller(PaymentMethodController::class)->prefix('payment-methods')->group(function () {
        Route::get('', 'index')->name('admin.sales.payment_methods.index');
        Route::post('', 'store')->name('admin.sales.payment_methods.store');
    });
});
