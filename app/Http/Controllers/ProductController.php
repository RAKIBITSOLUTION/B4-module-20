<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function productList (Request $request){
      return Product::get();
   }
   function productCreate (Request $request){
      return Product::create($request->input());
      
   }
   function productShow (Request $request){
      
      return Product::first('id');
   }
}
