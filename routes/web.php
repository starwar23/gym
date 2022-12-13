<?php
/**
 * @routeNamespace("App\Http\Controllers")
 * @routePrefix("")
 */

use App\Http\Controllers\PageController as PageControllerAlias;
use Illuminate\Support\Facades\Route;

Route::controller(PageControllerAlias::class)
    ->middleware('guest:web')
    ->as('page.')
    ->group(function () {

        Route::get('/', 'home')->name('home');
        Route::get('about', 'about')->name('about');
        Route::get('gallery', 'gallery')->name('gallery');
        Route::get('contact', 'contact')->name('contact');
    });
