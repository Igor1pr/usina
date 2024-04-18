<?php

namespace App\Http\Controllers;

use App\Models\aux_type_identities;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {

        $drivers = Driver::all();

        return view('4-motorista.motorista', ['drivers' => $drivers]);
    }

    public function create() {

        $typeIdentities = aux_type_identities::all();

        return view('4-motorista.create-motorista', ['typeIdentities' => $typeIdentities]);
    }

    public function store(Request $request) {

        $driver = new Driver;

        $driver->name = $request->name;
        $driver->identity = $request->identity;
        $driver->type_identities_id = $request->type_identities_id;

        $driver->save();

        return redirect('/motoristas');
    }
}
