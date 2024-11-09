<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

//Prage Route
   function productCreatePage (Request $request){
      
      return view("productsEntry");
      
   }
   function productEditPage (Request $request){
      
      return view("productsEdit");
      
   }

   //Action Route
      
   function productList (Request $request){
      return Product::get();
   }
   function productCreate (Request $request){
      return Product::create($request->input());
      
   }
   function singleProductShow (Request $request){
      
      return Product::where('id',$request->id)->first();
      
   }

   function productUpdate (Request $request){
      
      return Product::where('id',$request->id)->update($request->input());
      
   }

   function productDelete (Request $request){
            
      return Product::where('id','=',$request->id)->delete();
      
   }
}
