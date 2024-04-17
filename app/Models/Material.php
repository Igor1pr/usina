<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public function type_measure_id() {
        return $this->hasOne(aux_type_measures::class);
    }

    protected $fillable = [
        'material',
        'medida_peso',
        'peso',
        'preco_unitario',
        'qtd_estoque',
        'type_measure_id'
    ];

    protected $guarded = [];
}
