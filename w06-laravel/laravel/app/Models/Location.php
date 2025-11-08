<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}
