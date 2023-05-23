<?php

use App\Http\Controllers\AtributeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Register a user to get the token
Route::post('/register', [UserController::class, 'store']);


//Show all products
Route::get('/products', [ProductsController::class, 'index'])->middleware(['auth:sanctum']);

//Create a post
Route::post('/products', [ProductsController::class, 'store'])->middleware(['auth:sanctum']);

//Get single product
Route::get('/products/{product}', [ProductsController::class, 'show'])->middleware(['auth:sanctum']);

//Update product
Route::put('/products/{product}', [ProductsController::class, 'update'])->middleware(['auth:sanctum']);

//Delete product
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->middleware(['auth:sanctum']);

//Store attributes for a product
Route::post('/products/{id}/store', [AtributeController::class, 'store'])->middleware(['auth:sanctum']);

