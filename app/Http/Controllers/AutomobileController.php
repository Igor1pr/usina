<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automobile;

class AutomobileController extends Controller
{
    public function index() {

        $automobiles = Automobile::all();

        return view('5-automovel.automovel', ['automobiles' => $automobiles]);
    }

    public function create() {
        return view('5-automovel.create-automovel');
    }

    public function store(Request $request) {

        $automobile = new Automobile;

        $automobile->automobile_type = $request->automobile_type;
        $automobile->prefixo = $request->prefixo;
        $automobile->tipo_placa = $request->tipo_placa;
        $automobile->placa = $request->placa;

        $automobile->save();

        return redirect('/automoveis');
    }
}
