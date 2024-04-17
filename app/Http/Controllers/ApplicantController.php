<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index() {

        $applicants = Applicant::all();

        return view('2-solicitantes.solicitante', ['applicants' => $applicants]);
    }

    public function create() {
        return view('2-solicitantes.create-solicitante');
    }

    public function store(Request $request) {

        $applicant = new Applicant;

        $applicant->nome_solicitante = $request->nome_solicitante;
        $applicant->tipo_setor = $request->tipo_setor;

        if ($request->tipo_setor === 'Interno') {
            $applicant->setor_interno = $request->setor_interno;
            $applicant->setor_externo = null;
            $applicant->prefixo_setor = $request->prefixo_setor;
        } elseif ($request->tipo_setor === 'Órgão Público') {
            $applicant->setor_externo = $request->setor_externo;
            $applicant->setor_interno = null;
            $applicant->prefixo_setor = null;
        }

        $applicant->quantidade_autorizada = $request->quantidade_autorizada;
        $applicant->type_applicants_id = $request->type_applicants_id;

        $applicant->save();

        return redirect('/solicitantes');

    }
}
