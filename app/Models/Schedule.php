<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the nurse that owns the schedule.
     */
    public function nurse()
    {
        return $this->belongsTo(Nurse::class);
    }
}
