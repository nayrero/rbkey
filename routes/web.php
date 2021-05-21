<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesItemController;
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
    return view('index');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::post('/order', 'App\Http\Controllers\OrderController@order');
//Route::get('/order', 'App\Http\Controllers\OrderController@send');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/services', 'App\Http\Controllers\ServicesItemController@service_item')->name('services');
