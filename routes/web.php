<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("/products",[ProductController::class,'productList']);
Route::get("/products/create",[ProductController::class,'productCreatePage']);
Route::post("/products",[ProductController::class,'productCreate']);
Route::get("/products/{id}",[ProductController::class,'singleProductShowPage']);
Route::get("/products/{id}/edit",[ProductController::class,'productEditPage']);
Route::put("/products/{id}",[ProductController::class,'productUpdate']);
Route::delete("/products/{id}",[ProductController::class,'productDelete']);