<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_supplie extends Model
{
    use HasFactory;

    public function order_id() {
        return $this->hasOne(Order::class);
    }

    public function supplie_id() {
        return $this->hasOne(Supplie::class);
    }

    protected $fillable = [
        'order_id',
        'supplie_id'
    ];

    protected $guarded = [];
}
