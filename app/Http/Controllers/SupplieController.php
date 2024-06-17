<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Automobile;
use App\Models\Driver;
use App\Models\Material;
use App\Models\Supplie;
use Illuminate\Http\Request;

class SupplieController extends Controller
{
    public function index() {

        $search = request('search');

        if ($search) {

            $supplies = Supplie::where([
                ['sei_number', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $supplies = Supplie::all();
        }

        return view('1-supplie_home.home', ['supplies' => $supplies, 'search' => $search]);
    }

    public function show($id)
    {
        // Obter a solicitação pelo ID
        $supplie = Supplie::findOrFail($id);

        // Retornar a visão com os detalhes da solicitação
        return view('1-supplie_home.details', ['supplie' => $supplie]);
    }

    public function create() {

        $drivers = Driver::all();
        $automobiles = Automobile::all();
        $applicants = Applicant::all();
        $materials = Material::all();

        return view('1-supplie_home.create-supplie',
        ['drivers' => $drivers, 'automobiles' => $automobiles, 'applicants' => $applicants, 'materials' => $materials]);
    }

    public function store(Request $request) {

        $supplie = new Supplie;

        $supplie->sei_number = $request->sei_number;
        $supplie->applicant_id = $request->applicant_id;
        $supplie->origin_address = $request->origin_address;
        $supplie->delivery_address = $request->delivery_address;

        $supplie->material_id = $request->material_id;
        $supplie->driver_id = $request->driver_id;
        $supplie->automobile_id = $request->automobile_id;
        $supplie->applicant_id = $request->applicant_id;
        $supplie->status_id = 1;

        $supplie->save();

        return redirect('/solicitacoes')->with('msg', 'Solicitação criada com sucesso!');
    }

    public function destroy($id) {

        Supplie::findOrFail($id)->delete();

        return redirect('/solicitacoes')->with('msg', 'Solicitação excluída com sucesso!');
    }

    public function edit($id) {

        $supplie = Supplie::findOrFail($id);
        $drivers = Driver::all();
        $automobiles = Automobile::all();
        $applicants = Applicant::all();
        $materials = Material::all();

        return view('1-supplie_home.edit-supplie', ['supplie' => $supplie, 'drivers' => $drivers, 'automobiles' => $automobiles, 'applicants' => $applicants, 'materials' => $materials]);
    }

    public function update(Request $request) {

        Supplie::findOrFail($request->id)->update($request->all());

        return redirect('/solicitacoes')->with('msg', 'Solicitação editada com sucesso!');
    }
}
