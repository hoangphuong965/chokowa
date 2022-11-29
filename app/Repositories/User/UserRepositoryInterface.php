<?php

namespace App\Repositories\User;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\User
 */
interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * Get all of users that belongs to an role name
     * @param $roleName
     * @return Collection|null
     */
    public function getUsersByRoleId($roleId);

    /**
     * Get user by email
     * @param string $email
     * @return mixed
     */
    public function getUserByEmail($email);

    /**
     * Check if user has role with provided roleName
     * @param string $username
     * @param string $roleName
     * @return mixed
     */
    public function getUserByEmailAndRoleId($username, $roleId);

    /**
     * Insert into database
     * @param array $attributes
     * @param \App\Models\User|null $author
     * @return mixed
     */
    public function create($attributes = [], $author = null);
}
