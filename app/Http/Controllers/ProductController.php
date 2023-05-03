<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::with('category')->get();
        $categories = category::where('status',1)->get();
        // dd($products);
        return view('product',compact('products','categories'));
    }
    public function store(Request $request){

        $product = new product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->categoryname = $request->input('category');
        $product->availability = $request->input('status');
        $product->save();

        return redirect('/product');

    }

    public function getProductsJson(){
        $products = product::where('availability',1)->get();

        return response()->json([
            'messsage' => "Success",
            'products' => $products
        ]
        ,200);
    }
}
