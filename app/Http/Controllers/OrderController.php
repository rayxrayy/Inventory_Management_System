<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $categories = order::all();
        // dd($categories);
        return view('order',compact('orders'));
    }

    public function store(Request $request){
        $category = new order();
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->save();

        return redirect('/order');
        // dd($request);
    }
}
