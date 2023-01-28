<?php

use App\Http\Controllers\Admin\AdCartController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController as ControllersCategoryController;
use App\Http\Controllers\MainController as ControllersMainController;
use App\Http\Controllers\ProductController as ControllersProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');

Route::post('/admin/users/login/store', [LoginController::class, 'store']);
Route::get('/admin/users/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('admin');

        #Category
        Route::prefix('/categories')->group(function () {
            Route::get('/add', [CategoryController::class, 'create']);
            Route::post('/add', [CategoryController::class, 'store']);
            Route::get('/list', [CategoryController::class, 'index']);
            Route::delete('/delete', [CategoryController::class, 'delete']);
            Route::get('/edit/{category}', [CategoryController::class, 'show']);
            Route::post('/edit/{category}', [CategoryController::class, 'update']);
        });

        #Product
        Route::prefix('/products')->group(function () {
            Route::get('/add', [ProductController::class, 'create']);
            Route::post('/add', [ProductController::class, 'store']);
            Route::get('/list', [ProductController::class, 'index']);
            Route::get('/edit/{product}', [ProductController::class, 'show']);
            Route::post('/edit/{product}', [ProductController::class, 'update']);
            Route::delete('/delete', [ProductController::class, 'destroy']);
        });

        #Upload
        Route::post('/upload/services', [UploadController::class, 'store']);

        #Order list
        Route::get('/order-list', [AdCartController::class, 'index']);
        Route::get('/customer/view/{customer}', [AdCartController::class, 'show']);
        Route::delete('/customer/delete', [AdCartController::class, 'destroy']);
    });
});

Route::get('/', [ControllersMainController::class, 'index']);
Route::post('/services/load-product', [ControllersMainController::class, 'loadProduct']);
Route::get('/all-products', [ControllersMainController::class, 'show_all_products']);

Route::get('/category/{id}-{slug}.html', [ControllersCategoryController::class, 'index']);
Route::get('/product/{id}-{slug}.html', [ControllersProductController::class, 'index']);

#Cart
Route::post('/add-cart', [CartController::class, 'index']);
Route::get('/cart', [CartController::class, 'show']);
Route::post('/cart', [CartController::class, 'addCart']);
Route::post('/update-cart', [CartController::class, 'update']);
Route::get('/cart/delete/{id}', [CartController::class, 'delete']);
