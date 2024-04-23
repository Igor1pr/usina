<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\aux_type_applicants;

class ApplicantController extends Controller
{
    public function index() {

        $search = request('search');

        if ($search) {

            $applicants = Applicant::where([
                ['nome_solicitante', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $applicants = Applicant::all();
        }

        return view('2-solicitantes.solicitante', ['applicants' => $applicants, 'search' => $search]);
    }

    public function create() {

        $typeApplicants = aux_type_applicants::all();

        return view('2-solicitantes.create-solicitante', ['typeApplicants' => $typeApplicants]);
    }

    public function store(Request $request) {

        $applicant = new Applicant;

        $applicant->nome_solicitante = $request->nome_solicitante;
        $applicant->quantidade_autorizada = $request->quantidade_autorizada;
        $applicant->type_applicants_id = $request->type_applicants_id;

        if ($request->type_applicants_id == 1) { // Interno
            $applicant->setor_interno = $request->setor_interno;
            $applicant->prefixo_setor = $request->prefixo_setor;
            $applicant->setor_externo = null;
        } elseif ($request->type_applicants_id == 2) { // Órgão Público
            $applicant->setor_externo = $request->setor_externo;
            $applicant->setor_interno = null;
            $applicant->prefixo_setor = null;
        }

        $applicant->save();

        return redirect('/solicitantes');

    }
}
