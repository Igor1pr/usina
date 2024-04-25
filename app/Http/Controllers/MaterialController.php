<?php

namespace App\Http\Controllers;

use App\Models\aux_type_measures;
use App\Models\Material;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index() {

        $search = request('search');

        if ($search) {

            $materials = Material::where([
                ['material', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $materials = Material::all();
        }

        return view('3-materiais.materiais', ['materials' => $materials, 'search' => $search]);
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

        return redirect('/materiais')->with('msg', 'Material adicionado com sucesso!');
    }

    public function destroy($id) {

        try {
            $material = Material::findOrFail($id);
            $material->delete();
            return redirect('/materiais')->with('msg', 'Material excluído com sucesso!');

        } catch (QueryException) {

            return redirect('/materiais')->with('error', 'Não é possível excluir este material pois existem solicitações associadas a ele.');
        }

    }
}
