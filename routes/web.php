<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductFieldController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserProductDataController;


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
    return view('welcome');
});

Auth ::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products_show', [ProductsController::class, 'show'])->name('products_show');
Route::get('/product_field_show', [ProductfieldController::class, 'show'])->name('product_field_show');
Route::get('/themes_show', [ThemesController::class, 'show'])->name('themes_show');
Route::get('/users_show', [UsersController::class,'show'])->name('users_show');
Route::get('/user_product_data_show', [UserProductDataController::class,'show'])->name('user_product_data_show');
Route::get('/products_create', [ProductsController::class, 'create'])->name('products_create');
Route::get('/users_create', [UsersController::class,'create'])->name('users_create');
Route::get('/themes_create', [ThemesController::class, 'create'])->name('themes_create');

Route::get('users', ['users'=>'UserController@index', 'as'=>'users.index']);



Route::post('/products_store', [ProductsController::class, 'store'])->name('products_store');

Route::post('/themes_store', [ThemesController::class, 'store'])->name('themes_store');

