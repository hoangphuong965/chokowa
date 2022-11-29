<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the user that owns the image.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the job that owns the image.
     */
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
