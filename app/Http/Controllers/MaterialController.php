<?php

namespace App\Http\Controllers;

use App\Models\aux_type_measures;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index() {

        $materials = Material::all();

        return view('3-materiais.materiais', ['materials' => $materials]);
    }

    public function create() {

        $typeMeasures = aux_type_measures::all();

        return view('3-materiais.create-materiais', ['typeMeasures' => $typeMeasures]);
    }

    public function store(Request $request) {

        $material = new Material;

        $material->material = $request->material;
        $material->peso = $request->peso;
        $material->preco_unitario = $request->preco_unitario;
        $material->qtd_estoque = $request->qtd_estoque;
        $material->type_measure_id = $request->type_measure_id;

        $material->save();

        return redirect('/materiais');
    }
}
