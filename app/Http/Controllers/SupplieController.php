<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Automobile;
use App\Models\Driver;
use App\Models\Supplie;
use Illuminate\Http\Request;

class SupplieController extends Controller
{
    public function index() {

        $supplies = Supplie::all();
        $drivers = Driver::all();
        $automobiles = Automobile::all();
        $applicants = Applicant::all();

        return view('1-supplie_home.home',
        ['supplies' => $supplies, 'drivers' => $drivers, 'automobiles' => $automobiles, 'applicants' => $applicants]);
    }

    public function details() {
        return view('1-supplie_home.details');
    }

    public function create() {

        $drivers = Driver::all();
        $automobiles = Automobile::all();
        $applicants = Applicant::all();

        return view('1-supplie_home.create-supplie',
        ['drivers' => $drivers, 'automobiles' => $automobiles, 'applicants' => $applicants]);
    }

    public function store(Request $request) {

        $supplie = new Supplie;

        $supplie->sei_number = $request->sei_number;
        $supplie->applicant_id = $request->applicant_id;
        $supplie->origin_address = $request->origin_address;
        $supplie->delivery_address = $request->delivery_address;

        $supplie->driver_id = $request->driver_id;
        $supplie->automobile_id = $request->automobile_id;
        $supplie->applicant_id = $request->applicant_id;

        $supplie->save();

        return redirect('/');
    }
}
