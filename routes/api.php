<?php

use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/products', [ProductsController::class, 'index']);

Route::post('/products', [ProductsController::class, 'store']);

Route::get('/products/{product}', [ProductsController::class, 'show']);

Route::put('/products/{product}', [ProductsController::class, 'update']);

Route::delete('/products/{product}', [ProductsController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
