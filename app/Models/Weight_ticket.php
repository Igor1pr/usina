<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight_ticket extends Model
{
    use HasFactory;

    public function supplie_id() {
        return $this->hasOne(Supplie::class);
    }

    public function material_id() {
        return $this->hasOne(Material::class);
    }

    protected $fillable = [
        'requested_quantity',
        'measured_quantity',
        'supplie_id',
        'material_id'
    ];

    protected $guarded = [];
}
