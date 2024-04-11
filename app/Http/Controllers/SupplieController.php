<?php

namespace App\Http\Controllers;

use App\Models\Supplie;
use Illuminate\Http\Request;

class SupplieController extends Controller
{
    public function index() {

        $supplies = Supplie::all();

        return view('1-supplie_home.home', ['supplies' => $supplies]);
    }

    public function create() {
        return view('');
    }

    public function details() {
        return view('1-supplie_home.details');
    }
}
