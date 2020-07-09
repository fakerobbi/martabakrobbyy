<?php

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

Route::get('/','IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

    Route::resource("menu", "Admin\MenuController");
    Route::resource("cabang", "Admin\CabangController");
    Route::resource("message", "Admin\MessageController");
    Route::resource("gallery", "Admin\GalleryController");
    
});