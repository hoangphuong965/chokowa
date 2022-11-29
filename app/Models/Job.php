<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the station that owns the job.
     */
    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    /**
     * Get the shifts of the job.
     */
    public function shifts()
    {
        return $this->hasMany(Shift::class);
    }

    /**
     * Get the images of the job.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the nurses that favour the job.
     */
    public function favouredNurses()
    {
        return $this->belongsToMany(Nurse::class, 'nurse_favorites', 'job_id', 'nurse_id');
    }
}
