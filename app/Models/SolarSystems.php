<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystems extends Model
{
    public function planets()
    {
    return $this->hasMany(Planet::class, 'solar_systems_id');
    }
}