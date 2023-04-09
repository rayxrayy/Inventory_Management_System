<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        // dd($categories);
        return view('product',compact('products'));
    }
    public function store(Request $request){
        $product = new product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->categoryname = $request->input('categoryname');
        $product->availability = $request->input('availability');
        $product->save();

        return redirect('/product');
        // dd($request);
    }
}
