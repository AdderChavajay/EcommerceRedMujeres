<?php

use App\Http\Controllers\AllCategoryController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShoppingController;
use App\Models\allCategory;
use App\Models\Association;
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

Route::get('/', [CatalogController::class, 'index'])->name('main');
Route::resource('product', ProductController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('association', AssociationController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
Route::apiResource('shopping', ShoppingController::class)->except('destroy');
Route::delete('shopping/remove/{id}', [ShoppingController::class, 'destroy'])->name('shopping.destroy');
Route::delete('shopping/clen-all', [ShoppingController::class, 'clearAllCart'])->name('shopping.clean');
Route::resource('allCategory', AllCategoryController::class)->middleware('auth');
Route::get('catalog', [CatalogController::class, 'allproducts'])->name('allproducts');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
