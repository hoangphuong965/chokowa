<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MstExpectTask extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the stations that owns the expect tasks.
     */
    public function stations()
    {
        return $this->belongsToMany(Station::class, 'expect_tasks', 'mst_expect_task_id', 'station_id');
    }
}
