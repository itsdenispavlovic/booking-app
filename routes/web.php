<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('about-us', [MainController::class, 'aboutUs'])->name('page.about-us');
Route::get('contact-us', [MainController::class, 'contact'])->name('page.contact');

Route::get('our-rooms', function() {
    return view('main.our-rooms');
})->name('page.our-rooms');

Route::get('rooms-gallery', function() {
    return view('main.room-gallery');
})->name('page.room-gallery');

Route::get('news', function() {
    return view('main.blog');
})->name('page.news');


/**
 * Admin
 */
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    /**
     * Roles
     */
    Route::resource('roles', 'RoleController');

    /**
     * User
     */
    Route::resource('users', 'UserController');

});

Route::get('{page}', [MainController::class, 'showNode'])->where('page', '([A-z0-9\d\-\/_.]+)?')->where('nodePath', '^(?!img-thumb.*$).*');
