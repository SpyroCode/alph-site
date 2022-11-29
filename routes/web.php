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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('website');
Route::get('/gallery', [\App\Http\Controllers\GallerySiteController::class, 'index'])->name('gallery');
Route::post('/gallery', [\App\Http\Controllers\GallerySiteController::class, 'getSection'])->name('gallery');
Route::get('/services-web', [\App\Http\Controllers\ServicesSiteController::class, 'index'])->name('services-web');
Route::get('/contact', [\App\Http\Controllers\ContactSiteController::class, 'index'])->name('contact');
Route::get('/about-me', [\App\Http\Controllers\AboutmeSiteController::class, 'index'])->name('about-me');

Auth::routes();
Route::resource('website-info', \App\Http\Controllers\WebsiteInfoController::class);
Route::resource('galleries', \App\Http\Controllers\GalleryController::class);
Route::resource('services', \App\Http\Controllers\ServiceController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
