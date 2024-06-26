<?php

namespace App\Http\Controllers;

use App\Models\aux_type_identities;
use App\Models\Driver;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {

        $search = request('search');

        if ($search) {

            $drivers = Driver::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $drivers = Driver::all();
        }

        return view('4-motorista.motorista', ['drivers' => $drivers, 'search' => $search]);
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

        return redirect('/motoristas')->with('msg', 'Motorista cadastrado com sucesso!');
    }

    public function destroy($id) {

        try {
            $driver = Driver::findOrFail($id);
            $driver->delete();
            return redirect('/motoristas')->with('msg', 'Motorista excluído com sucesso!');

        } catch (QueryException) {

            return redirect('/motoristas')->with('error', 'Não é possível excluir este motorista pois existem solicitações associadas a ele.');
        }

    }
}
