<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//PageRoute
//Route::post("/products/create",[ProductController::class,'productCreatePage']);



//ActionRoute
Route::get("/products",[ProductController::class,'productList']);
Route::post("/products",[ProductController::class,'productCreate']);
Route::get("/products/{id}",[ProductController::class,'productShow']);