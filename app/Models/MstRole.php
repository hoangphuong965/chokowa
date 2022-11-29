<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MstRole extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Configure for admin id in mst_roles table.
     */
    const ADMIN_ID = 1;

    /**
     * Configure for station id in mst_roles table.
     */
    const STATION_ID = 2;

    /**
     * Configure for nurse id in mst_roles table.
     */
    const NURSE_ID = 3;

    /**
     * Get the users that owns the role.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * The permissions that belong to the role.
     */
    public function permissions()
    {
        return $this->belongsToMany(MstPermission::class, 'permission_role', 'mst_role_id', 'mst_permission_id');
    }
}
