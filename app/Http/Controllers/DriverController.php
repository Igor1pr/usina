<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {

        $drivers = Driver::all();

        return view('4-motorista.motorista', ['drivers' => $drivers]);
    }

    public function create() {
        return view('4-motorista.create-motorista');
    }
}
