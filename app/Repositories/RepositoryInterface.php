<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

interface RepositoryInterface
{
    /**
     * Get the table name of the current model
     * @return string
     */
    public function getTableName();

    /**
     * Get all
     * @return Collection
     */
    public function getAll();

    /**
     * Get one
     * @param $id
     * @return mixed|null
     */
    public function find($id);

    /**
     * @param $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOrFail($id);

    /**
     * Insert into database
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = []);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @param \App\Models\User|null $author
     * @return mixed
     */
    public function update($id, $attributes = [], $author = null);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
