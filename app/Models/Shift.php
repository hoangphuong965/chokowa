<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shift extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the job that owns the shift.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * The nurses that applied the shift.
     */
    public function nurses()
    {
        return $this->belongsToMany(Nurse::class, 'apply_shifts', 'shift_id', 'nurse_id');
    }
}
