<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


//Page
Route::get("/products/list",[ProductController::class,'productListPage']);
Route::get("/products/create",[ProductController::class,'productCreatePage']);
Route::get("/products/{id}/edit",[ProductController::class,'productEditPage']);


//Action
Route::get("/products",[ProductController::class,'productList']);
Route::post("/products",[ProductController::class,'productCreate']);
Route::get("/products/{id}",[ProductController::class,'singleProductShowPage']);
Route::put("/products/{id}",[ProductController::class,'productUpdate']);
Route::delete("/products/{id}",[ProductController::class,'productDelete']);