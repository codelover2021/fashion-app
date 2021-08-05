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
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/requestAnItem', [App\Http\Controllers\UserController::class, 'requestAnItem'])->name('requestAnItem');
//Route::get('/careers', [App\Http\Controllers\UserController::class, 'careers'])->name('careers');
Route::get('/brands', [App\Http\Controllers\UserController::class, 'brands'])->name('brands');
Route::get('/faqs', [App\Http\Controllers\UserController::class, 'faqs'])->name('faqs');
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::get('/ambassador', [App\Http\Controllers\AmbassadorController::class, 'ambassador'])->name('ambassador');
Route::post('/ambassadorSend', [App\Http\Controllers\AmbassadorController::class, 'ambassadorSend'])->name('ambassadorSend');

Route::get('/my-account', [App\Http\Controllers\UserController::class, 'my_account'])->name('my-account');
Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'showChangePasswordForm'])->name('change-password');
Route::post('/toChangePassword', [App\Http\Controllers\UserController::class, 'changePassword']);
Route::post('/requestSend', [App\Http\Controllers\UserController::class, 'request'])->name('requestSend');

Route::get('/filter', [App\Http\Controllers\FilterController::class, 'filter'])->name('filter');
Route::get('/designers', [App\Http\Controllers\FilterController::class, 'designers'])->name('designers');

Route::get('/careers', [App\Http\Controllers\CarrersController::class, 'careers'])->name('careers');

Route::get('/product-single/{id}', [App\Http\Controllers\ProductContrtoller::class, 'single_product'])->name('product-single');

Route::post('/consign', [App\Http\Controllers\ConsignmentController::class, 'consign_an_item'])->name('consign');
Route::post('/consignSend', [App\Http\Controllers\ConsignmentController::class, 'consignSend'])->name('consignSend');
Route::get('/consignSecond', [App\Http\Controllers\ConsignmentController::class, 'consignSecond'])->name('consignSecond');



