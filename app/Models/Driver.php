<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function type_identity() {
        return $this->hasOne(aux_type_identities::class);
    }

    protected $fillable = [
        'name',
        'identity',
        'type_identities_id'
    ];

    protected $guarded = [];
}
