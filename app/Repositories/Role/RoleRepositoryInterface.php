<?php

namespace App\Repositories\Role;

use App\Repositories\RepositoryInterface;

/**
 * Interface RoleRepositoryInterface
 * @package App\Repositories\Role
 */
interface RoleRepositoryInterface extends RepositoryInterface
{
    /**
     * Get role by name
     * @param $name
     * @return mixed
     */
    public function findByName($name);
}
