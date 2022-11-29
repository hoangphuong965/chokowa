<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Role\RoleRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Exception;

/**
 * Class UserRepository
 * @package App\Repositories\User
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @var RoleRepositoryInterface
     */
    protected $roleRepo;

    /**
     * UserRepository constructor.
     * @param RoleRepositoryInterface $roleRepo
     */
    public function __construct(RoleRepositoryInterface $roleRepo)
    {
        parent::__construct();
        $this->roleRepo = $roleRepo;
    }

    /**
     * Get the model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    /**
     * Get all of users that belongs to an role name
     * @param $roleName
     * @return Collection|null
     */
    public function getUsersByRoleId($roleId)
    {
        $role = $this->roleRepo->findOrFail($roleId);
        return optional($role)->users;
    }

    /**
     * Get user by email
     * @param string $email
     * @return mixed
     */
    public function getUserByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }


    /**
     * Check if user has role with provided roleName
     * @param string $username
     * @param string $roleName
     * @return mixed
     */
    public function getUserByEmailAndRoleId($email, $roleId)
    {
        return $this->model->where([
            ['email', $email],
            ['role_id', $roleId]
        ])->first();
    }

    /**
     * Insert into database
     * @param array $attributes
     * @param \App\Models\User|null $author
     * @return mixed
     */
    public function create($attributes = [], $author = null)
    {
        $newUser = parent::create($attributes);

        $newUser->created_user = $newUser->id;
        $newUser->updated_user = $newUser->id;
        $newUser->save();

        return $newUser;
    }
}
