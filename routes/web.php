<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SoldProductController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ProfileController;
use Doctrine\DBAL\Driver\Middleware;
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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('product', ProductController::class)->except(['show']);
    Route::resource('category', CategoryController::class);
    Route::get('soldproduct', [SoldProductController::class, 'index'])->name('SoldProduct.index');
    Route::get('soldproduct/{sale}/show', [SoldProductController::class, 'show'])->name('SoldProduct.show');
    Route::get('user-profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('user-settings-profile', [ProfileController::class, 'profileSettings'])->name('settings.profile');
    Route::resource('association', AssociationController::class);
    Route::resource('user', UserController::class);

    //Route::get('change-password', [ChangePasswordController::class], 'index');

    Route::post('change-password', [ProfileController::class, 'store'])->name('change.password');
});

Route::get('/', [CatalogController::class, 'index'])->name('main');
Route::apiResource('shopping', ShoppingController::class)->except('destroy');
Route::delete('shopping/remove/{id}', [ShoppingController::class, 'destroy'])->name('shopping.destroy');
Route::delete('shopping/clen-all', [ShoppingController::class, 'clearAllCart'])->name('shopping.clean');
Route::get('shopping-success/status', [ShoppingController::class, 'success']);
Route::get('catalog', [CatalogController::class, 'allproducts'])->name('allproducts');
Route::get('all-categories', [CatalogController::class, 'allCategories'])->name('catalog.categories');
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('product-search', [CatalogController::class, 'search'])->name('product.search');
Route::get('direction', [DirectionController::class, 'index'])->name('direcctions.index');


Route::get('paypal/process/{orderId}', [PayPalController::class, 'process'])->name('paypal.process');

require __DIR__ . '/auth.php';
