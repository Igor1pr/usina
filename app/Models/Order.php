<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function material_id() {
        return $this->hasOne(Material::class);
    }

    protected $fillable = [
        'unit_price',
        'delivered_quantity',
        'requested_quantity',
        'material_id'
    ];

    protected $guarded = [];
}
