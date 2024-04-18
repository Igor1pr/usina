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

    public function typeApplicant() {
        return $this->belongsTo(aux_type_applicants::class, 'type_applicants_id');
    }

    protected $fillable = [
        'nome_solicitante',
        'setor_interno',
        'prefixo_setor',
        'setor_externo',
        'quantidade_autorizada',
        'type_applicants_id'
    ];

    protected $guarded = [];
}
