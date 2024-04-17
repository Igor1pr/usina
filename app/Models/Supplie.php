<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplie extends Model
{
    use HasFactory;

    public function status_id() {
        return $this->hasOne(Status::class);
    }

    public function automobile_id() {
        return $this->hasOne(Automobile::class);
    }

    public function applicant_id() {
        return $this->hasOne(Applicant::class);
    }

    public function driver_id() {
        return $this->hasOne(Driver::class);
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
