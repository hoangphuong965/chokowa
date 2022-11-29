<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MstPermission extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The roles that belong to the permission.
     */
    public function mstRoles()
    {
        return $this->belongsToMany(MstRole::class, 'permission_role', 'mst_permission_id', 'mst_role_id');
    }
}
