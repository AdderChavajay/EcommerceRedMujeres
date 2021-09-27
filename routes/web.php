<?php

use App\Http\Controllers\detailsProduct;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginEcommerce;
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

Route::get('/', homeController::class);

Route::get('/detailsProduct', [detailsProduct::class,'show']); 

Route::get('/createAcount',[loginEcommerce::class,'createAcount'] );