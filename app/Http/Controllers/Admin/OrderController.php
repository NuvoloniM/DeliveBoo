<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Restaurant;

class OrderController extends Controller

{
    public function index(  )
    {
        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }
}
