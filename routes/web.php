<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/careers', [App\Http\Controllers\HomeController::class, 'careers'])->name('careers');
Route::get('/brands', [App\Http\Controllers\HomeController::class, 'brands'])->name('brands');

Route::get('/my-account', [App\Http\Controllers\UserController::class, 'my_account'])->name('my-account');
Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->name('change-password');
Route::post('/toChangePassword', [App\Http\Controllers\UserController::class, 'changePassword']);
