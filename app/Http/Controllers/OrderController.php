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
    }

    public function store(Request $request)
    {

        $order = new Order();
        $order->client_name = $request->input('name');
        $order->client_address = $request->input('address');
        $order->client_phone = $request->input('phone');
        $order->gross_amount = $request->input('gamount')??null;
        $order->vat = $request->input('vat') ??null;
        $order->s_charge = $request->input('charge') ??null;
        $order->discount = $request->input('discount');
        $order->net_amount = $request->input('namount') ?? null;

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

      // Delete a order
    public function destroy($id)
    {
        $order = order::find($id);
        $order->delete();
        return redirect('/order')->with(['message'   => 'order deleted successfully']);
    }
}
