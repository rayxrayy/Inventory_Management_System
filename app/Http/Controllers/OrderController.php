<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        // dd($orders);

        return view('order', compact('orders'));
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
    public function store(Request $request)
    {
        // echo 'asdfghj';
        $order = new Order();
        $order->client_name = $request->input('name');
        $order->client_address = $request->input('address');
        $order->client_phone = $request->input('phone');
        $order->gross_amount = $request->input('gross_amount')??null;
        $order->vat = $request->input('vat') ??null;
        $order->s_charge = $request->input('s_charge') ??null;
        $order->discount = $request->input('discount');
        $order->net_amount = $request->input('net_amount') ?? null;

        $order->save();

        foreach($request->input('product') as $key => $product) {
            $order->products()->attach($product, ['quantity' => $request->input('qty')[$key]]);
        }

        return redirect('/order');
    }

    public function orderProducts(Request $request, $order_id)
    {
        $products = Order::find($order_id)->products;

        return view('orderProducts', compact('products'));
    }
}
