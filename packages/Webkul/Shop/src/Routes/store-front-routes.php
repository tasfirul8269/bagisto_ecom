<?php

use Illuminate\Support\Facades\Route;
// REMOVED: BookingProduct package not installed
// use Webkul\Shop\Http\Controllers\BookingProductController;
use Webkul\Shop\Http\Controllers\HomeController;
// REMOVED: CMS package not installed
// use Webkul\Shop\Http\Controllers\PageController;
use Webkul\Shop\Http\Controllers\ProductController;
use Webkul\Shop\Http\Controllers\ProductsCategoriesProxyController;
use Webkul\Shop\Http\Controllers\SearchController;
use Webkul\Shop\Http\Controllers\SubscriptionController;

// REMOVED: CMS routes disabled — CMS package not installed
// Route::get('page/{slug}', [PageController::class, 'view'])->name('shop.cms.page');

/**
 * Fallback route.
 */
Route::fallback(ProductsCategoriesProxyController::class.'@index')
    ->name('shop.product_or_category.index')
    ->middleware('cache.response');

/**
 * Store front home.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('shop.home.index')
    ->middleware('cache.response');

Route::get('contact-us', [HomeController::class, 'contactUs'])
    ->name('shop.home.contact_us')
    ->middleware('cache.response');

Route::get('all-categories', [HomeController::class, 'allCategories'])
    ->name('shop.all-categories.index');

Route::get('flash-sale', [HomeController::class, 'flashSale'])
    ->name('shop.flash-sale.index');

Route::post('contact-us/send-mail', [HomeController::class, 'sendContactUsMail'])
    ->name('shop.home.contact_us.send_mail')
    ->middleware('cache.response');

/**
 * Store front search.
 */
Route::get('search', [SearchController::class, 'index'])
    ->name('shop.search.index')
    ->middleware('cache.response');

Route::post('search/upload', [SearchController::class, 'upload'])->name('shop.search.upload');

Route::get('api/search', [SearchController::class, 'suggestions'])->name('shop.search.suggestions');

/**
 * Subscription routes.
 */
Route::controller(SubscriptionController::class)->group(function () {
    Route::post('subscription', 'store')->name('shop.subscription.store');

    Route::get('subscription/{token}', 'destroy')->name('shop.subscription.destroy');
});

/**
 * Downloadable products
 */
Route::controller(ProductController::class)->group(function () {
    Route::get('downloadable/download-sample/{type}/{id}', 'downloadSample')->name('shop.downloadable.download_sample');

    Route::get('product/{id}/{attribute_id}', 'download')->name('shop.product.file.download');
});

// REMOVED: Booking product routes disabled — BookingProduct package not installed
// Route::get('booking-slots/{id}', [BookingProductController::class, 'index'])->name('shop.booking-product.slots.index');
