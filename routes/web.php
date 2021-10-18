<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
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

Route::get('/2', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('product', ProductController::class)->except(['show']);
    Route::resource('category', CategoryController::class);
    Route::resource('association', AssociationController::class);
    Route::resource('user', UserController::class);
});

Route::get('/', [CatalogController::class, 'index'])->name('main');
Route::apiResource('shopping', ShoppingController::class)->except('destroy');
Route::delete('shopping/remove/{id}', [ShoppingController::class, 'destroy'])->name('shopping.destroy');
Route::delete('shopping/clen-all', [ShoppingController::class, 'clearAllCart'])->name('shopping.clean');
Route::get('catalog', [CatalogController::class, 'allproducts'])->name('allproducts');
Route::get('category', [CatalogController::class, 'allCategories'])->name('catalog.categories');
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
