<?php

namespace App\Http\Controllers;

use App\Models\Order_supplie;
use Illuminate\Http\Request;

class Order_supplieController extends Controller
{
    public function store(Request $request) {

        $order_supplie = new Order_supplie;

        $order_supplie->order_id = $request->order_id;
        $order_supplie->supplie_id = $request->supplie_id;

        $order_supplie->save();
    }
}
