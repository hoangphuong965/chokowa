<?php

namespace App\Repositories\Permission;

use App\Models\MstPermission;
use App\Repositories\BaseRepository;

/**
 * Class PermissionRepository
 * @package App\Repositories\Permission
 */
class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    /**
     * * Get the model
     * @return string
     */
    public function getModel()
    {
        return MstPermission::class;
    }
}
