<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    use HasFactory;

    protected $fillable = [
        'automobile_type',
        'prefixo',
        'tipo_placa',
        'placa',
    ];

    protected $guarded = [];
}
