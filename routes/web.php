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

Route::get('/', function () {
    return view('website');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Route::resource('website-info', \App\Http\Controllers\WebsiteInfoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
