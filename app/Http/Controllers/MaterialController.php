<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index() {

        $materials = Material::all();

        return view('3-materiais.materiais', ['materials' => $materials]);
    }

    public function create() {
        return view('3-materiais.create-materiais');
    }

    public function store(Request $request) {

        $material = new Material;

        $material->material = $request->material;
        $material->medida_peso = $request->medida_peso;
        $material->peso = $request->peso;
        $material->preco_unitario = $request->preco_unitario;
        $material->qtd_estoque = $request->qtd_estoque;

        $material->save();

        return redirect('/materiais');
    }
}
