<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

//Page Route
   function productCreatePage (Request $request){
      return view("create");
   }
   function singleProductShowPage (Request $request){
      return view("show");
   }
   function productEditPage (Request $request){
      return view("edit");
   }

   //Action Route
   function productList (Request $request){
      return Product::get();
   }
   function productCreate (Request $request){
      return Product::create([
      'product_id'=> $request->input('product_id'),
      'name'=>$request->input('name'),
      'description'=>$request->input('description'),
      'Price'=>$request->input('Price'),
      'stock'=>$request->input('stock'),
      'image'=>$request->input('image'),
     ]);
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