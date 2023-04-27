<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        // dd($orders);
        
         return view('order',compact('orders'));
        // $categories = order::all();
        // // dd($categories);
        // return view('order',compact('orders'));
    }

    // public function store(Request $request){
    //     $category = new order();
    //     $category->name = $request->input('name');
    //     $category->status = $request->input('status');
    //     $category->save();

    //     return redirect('/order');
    // }
    public function store(Request $request){
        $data = [
            'client_name'   => $request->input('name'),
            'client_address'   => $request->input('address'),
            'client_phone'   => $request->input('phone'),
            'gross_amount'   => $request->input('gross_amount') ??null,
            'vat'   => $request->input('vat') ??null,
            's_charge'   => $request->input('s_charge') ??null,
            'discount'   => $request->input('discount'),
            'net_amount'   => $request->input('net_amount') ?? null,
        ];
        
        Order::insert($data);

        return redirect()->route('/order');
    }
}
