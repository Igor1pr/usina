<?php

namespace App\Http\Controllers;

use App\Models\Weight_ticket;
use Illuminate\Http\Request;

class Weight_ticketController extends Controller
{
    public function store(Request $request) {

        $weight_ticket = new Weight_ticket;

        $weight_ticket->requested_quantity = $request->requested_quantity;
        $weight_ticket->measured_quantity = $request->measured_quantity;
        $weight_ticket->supplie_id = $request->supplie_id;
        $weight_ticket->material_id = $request->material_id;

        $weight_ticket->save();
    }
}
