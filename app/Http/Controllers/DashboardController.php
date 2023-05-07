<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
    // dd($data);
    // load dashboard view with latest notification
    return view('dashboard', compact('data'));
}

}
