<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Models\category;
use App\Models\member;
use App\Models\product;

class DashboardController extends Controller
{
    public function index()
{

    // get latest notification
    // $latestNotification = Notification::latest()->first();

    $data['total_category'] = category::count();
    $data['total_member'] = member::count();
    $data['total_product'] = product::count();
    $data['total_sales'] = Order::sum('net_amount');
    $data['paid_amount'] = Order::where('is_paid', true)->count();
    $data['unpaid_amount'] = Order::where('is_paid', false)->count();
    $data['customer_name'] = Order::pluck('client_name')->toArray();
    $data['category'] = Category::pluck('name')->toArray();
    $data['product'] = Product::pluck('name')->toArray();
    $data['member'] = Member::pluck('name')->toArray();
    $data['profile'] = setting::pluck('firstname')->toArray();
    // $data['product_name'] = Product::pluck('name')->toArray();

    // $data['product_name'] = product::pluck('name')->toArray();

    // dd($data);
    // load dashboard view with latest notification
    return view('dashboard', compact('data'));
}

}
