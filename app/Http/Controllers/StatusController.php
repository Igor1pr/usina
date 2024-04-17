<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function store(Request $request) {

        $status = new Status;

        $status->description = $request->description;

        $status->save();
    }
}
