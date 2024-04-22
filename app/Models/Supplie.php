<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplie extends Model
{
    use HasFactory;

    public function material() {
        return $this->belongsTo(Material::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function automobile() {
        return $this->belongsTo(Automobile::class);
    }

    public function applicant() {
        return $this->belongsTo(Applicant::class);
    }

    public function driver() {
        return $this->belongsTo(Driver::class);
    }

    protected $fillable = [
        'sei_number',
        'origin_address',
        'delivery_address',
        'automobile_id',
        'applicant_id',
        'driver_id'
    ];

    protected $guarded = [];
}
