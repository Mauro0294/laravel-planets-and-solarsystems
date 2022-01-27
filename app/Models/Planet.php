<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    public function solar()
    {
    return $this->belongsTo(SolarSystems::class, 'solar_systems_id');
    }
}