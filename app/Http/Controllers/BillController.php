<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = bill::all();
        // dd($bills);
        return view('bill',compact('bills'));
    }

    public function store(Request $request){
        $bill = new bill();
        // dd($bill);
        $bill->client_name = $request->input('name');
        $bill->client_address = $request->input('address');
        $bill->client_phone = $request->input('phone');
        $bill->order_id = $request->input('orderid');
        $bill->product_id = $request->input('productid');
        $bill->rate = $request->input('rate');
        $bill->quantity = $request->input('quantity');
        $bill->gross_amount = $request->input('gamount')??null;
        $bill->vat = $request->input('vat') ??null;
        $bill->s_charge = $request->input('charge') ??null;
        $bill->discount = $request->input('discount');
        $bill->net_amount = $request->input('namount') ?? null;
        $bill->save();

        return redirect('/bill');
        // dd($request);
    }

    public function update(Request $request)
    {
        if(!$request->has('id')){
            return redirect('/bill')->with(['message' => 'Oops.. Something went wrong']);
        }

        $bill = bill::find($request->input('id'));
        $bill->name = $request->input('name') ?? $bill->name;
        $bill->client_address = $request->input('address')?? $bill->client_address;
        $bill->client_phone = $request->input('phone')?? $bill->client_phone;
        $bill->order_id = $request->input('orderid')?? $bill->order_id;
        $bill->product_id = $request->input('productid')?? $bill->product_id;
        $bill->rate = $request->input('rate')?? $bill->rate;
        $bill->quantity = $request->input('quantity')?? $bill->quantity;
        $bill->gross_amount = $request->input('gamount')??null?? $bill->gross_amount;
        $bill->vat = $request->input('vat') ??null?? $bill->vat;
        $bill->s_charge = $request->input('charge') ??null?? $bill->s_charge;
        $bill->discount = $request->input('discount')?? $bill->discount;
        $bill->net_amount = $request->input('namount') ?? null?? $bill->net_amount;
        $bill->save();

        return redirect('/bill');
    }
}
