<?php

namespace App\Repositories\Role;

use App\Models\MstRole;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class RoleRepository
 * @package App\Repositories\Role
 */
class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    /**
     * * Get the model
     * @return string
     */
    public function getModel()
    {
        return MstRole::class;
    }

    /**
     * Get role by name
     * @param $name
     * @return mixed
     */
    public function findByName($name)
    {
        return $this->model->where('name', '=', $name)->first();
    }
}
