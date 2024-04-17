<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request) {

        $order = new Order;

        $order->order_id = $request->order_id;
        $order->supplie_id = $request->supplie_id;

        $order->save();
    }
}
