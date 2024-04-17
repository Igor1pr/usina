<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function type_applicants() {
        return $this->hasOne(aux_type_applicants::class);
    }

    protected $fillable = [
        'nome_solicitante',
        'tipo_setor',
        'setor_interno',
        'prefixo_setor',
        'setor_externo',
        'quantidade_autorizada',
        'type_applicants_id'
    ];

    protected $guarded = [];
}
