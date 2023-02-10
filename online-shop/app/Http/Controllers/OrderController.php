<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    function index()
    {
        $orders = Order::all();
        return view('admin.orders.orders',compact('orders'));
    }
}
