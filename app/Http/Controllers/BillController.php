<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Order;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index($order_id)
    {
        $bill = Order::with('products')->find($order_id);


        // dd($bill);
        return view('bill',compact('bill'));
    }

    public function confirmPayment($order_id){

        order::where('id',$order_id)->update(['is_paid' => 1]);

        return redirect('/bill/' . $order_id)->with(['message'  => "Order Payment accepted"]);
    }
}
