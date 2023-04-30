<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $products = product::all();
        $categories = category::where('status',1)->get();

        $products = product::with('category')->get();
        // dd($categories);
        return view('product',compact('products'));
=======
        $categories = category::where('status',1)->get();
    
        $products = product::with('category')->get();
        
        return view('product',compact('products','categories'));
>>>>>>> ea5a34a014353af9ff3a5adab586511c8fc20704
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
