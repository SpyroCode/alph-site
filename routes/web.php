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
Route::get('/services', [\App\Http\Controllers\ServicesSiteController::class, 'index'])->name('services');
Route::get('/contact', [\App\Http\Controllers\ContactSiteController::class, 'index'])->name('contact');

Auth::routes();
Route::resource('website-info', \App\Http\Controllers\WebsiteInfoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
