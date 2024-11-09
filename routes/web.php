<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//PageRoute
Route::get("/products/create",[ProductController::class,'productCreatePage']);
Route::get("/products/{id}/edit",[ProductController::class,'productEditPage']);


//ActionRoute
Route::get("/products",[ProductController::class,'productList']);
Route::post("/products",[ProductController::class,'productCreate']);
Route::get("/products/{id}",[ProductController::class,'singleProductShow']);
Route::put("/products/{id}",[ProductController::class,'productUpdate']);
Route::delete("/products/{id}",[ProductController::class,'productDelete']);