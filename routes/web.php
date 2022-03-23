<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductFieldController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserProductDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProductsCrud;



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
Route::middleware(['auth'])->group(function () {

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/fill_info/{id}', [UserProductsCrud::class, 'openViewForProduct'])->name('fill_info');
Route::post('/userproductstore/{id}', [UserProductsCrud::class, 'userproductstore'])->name('save_user_product_data');
Route::post('/userproductupdate/{id}', [UserProductsCrud::class, 'userproductupdate'])->name('update_user_product_data');
Route::get('/userproductedit/{id}', [UserProductsCrud::class, 'userproductedit'])->name('edit_user_product_data');
Route::get('/userorderdproduct', [UserProductsCrud::class, 'UserOrderdProduct'])->name('orderd_user_product_data');



Route::get('/products_show', [ProductsController::class, 'show'])->name('products_show');
Route::get('/product_field_show', [ProductfieldController::class, 'show'])->name('product_field_show');
Route::get('/themes_show', [ThemesController::class, 'show'])->name('themes_show');
Route::get('/users_show', [UsersController::class,'show'])->name('users_show');
Route::get('/users_edit/{id}', [UsersController::class, 'edit'])->name('users_edit');
Route::get('/user_product_data_show', [UserProductDataController::class,'show'])->name('user_product_data_show');
Route::get('/products_create', [ProductsController::class, 'create'])->name('products_create');
Route::get('/products_edit/{id}', [ProductsController::class, 'edit'])->name('products_edit');
Route::post('/products_edit_update/{id}', [ProductsController::class, 'update'])->name('products_update');
Route::post('/products_edit_update/{id}', [ProductsController::class, 'update'])->name('products_update');

Route::get('/users_create', [UsersController::class,'create'])->name('users_create');
Route::get('/themes_create', [ThemesController::class, 'create'])->name('themes_create');
Route::get('/themes_edit/{id}', [ThemesController::class, 'edit'])->name('themes_edit');
Route::post('/themes_update/{id}', [ThemesController::class, 'update'])->name('themes_update');
Route::get('/user_product_data_create', [UserProductDataController::class,'create'])->name('user_product_data_create');
Route::get('/user_product_data_edit/{id}', [UserProductDataController::class, 'edit'])->name('user_product_data_edit');
Route::get('/product_field_create', [ProductfieldController::class, 'create'])->name('product_field_create');
Route::get('/product_field_edit/{id}', [ProductFieldController::class, 'edit'])->name('product_field_edit');
Route::post('/user_product_data_update/{id}', [UserProductDataController::class, 'update'])->name('user_product_data_update');

Route::post('/product_field_update/{id}', [ProductFieldController::class, 'update'])->name('product_field_update');
Route::get('users', ['users'=>'UserController@index', 'as'=>'users.index']);



Route::post('/products_store', [ProductsController::class, 'store'])->name('products_store');

Route::post('/themes_store', [ThemesController::class, 'store'])->name('themes_store');

Route::post('/user_product_data_store', [UserProductDataController::class,'store'])->name('user_product_data_store');

Route::post('/product_field_store', [ProductfieldController::class, 'store'])->name('product_field_store');



Route::get('/user_product_data_delete/{id}', [UserProductDataController::class, 'destroy'])->name('user_product_data_delete');
Route::get('/products_delete/{id}', [ProductsController::class, 'destroy'])->name('products_delete');
Route::get('/themes_delete/{id}', [ThemesController::class, 'destroy'])->name('themes_delete');
Route::get('/product_field_delete/{id}', [ProductFieldController::class, 'destroy'])->name('product_field_delete');
Route::get('/users_delete/{id}', [UsersController::class, 'destroy'])->name('users_delete');

});

Route::get('/{id}', [UserProductsCrud::class, 'index'])->name('viewdata');
