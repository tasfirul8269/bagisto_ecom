<?php

use Illuminate\Support\Facades\Route;
use Webkul\Admin\Http\Controllers\Storefront\HeroCarouselController;

/**
 * Storefront routes.
 */
Route::prefix('storefront')->group(function () {
    /**
     * Hero Carousel routes.
     */
    Route::controller(HeroCarouselController::class)->prefix('hero-carousel')->group(function () {
        Route::get('', 'index')->name('admin.storefront.hero_carousel.index');

        Route::post('store', 'store')->name('admin.storefront.hero_carousel.store');

        Route::put('update/{id}', 'update')->name('admin.storefront.hero_carousel.update');

        Route::delete('destroy/{id}', 'destroy')->name('admin.storefront.hero_carousel.destroy');

        Route::post('mass-update', 'massUpdate')->name('admin.storefront.hero_carousel.mass_update');
    });
});
