<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MstPrefecture extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the stations that owns the prefecture.
     */
    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    /**
     * Get the nurses that owns the prefecture.
     */
    public function nurses()
    {
        return $this->hasMany(Nurse::class);
    }
}
