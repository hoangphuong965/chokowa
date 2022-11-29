<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the user that has the station info.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the expect tasks that belongs to the station.
     */
    public function mstExpectTask()
    {
        return $this->belongsToMany(MstExpectTask::class, 'expect_tasks', 'station_id', 'mst_expect_task_id');
    }

    /**
     * Get the prefecture that belongs to the station.
     */
    public function mstPrefecture()
    {
        return $this->belongsTo(MstPrefecture::class);
    }

    /**
     * Get the jobs of the station.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    /**
     * Get the favourite nurse of the station.
     */
    public function favouriteNurses()
    {
        return $this->belongsToMany(Nurse::class, 'station_favorites', 'station_id', 'nurse_id');
    }
}
