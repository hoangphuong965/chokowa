<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return string
     */
    abstract public function getModel();

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get the table name of the current model
     * @return string
     */
    public function getTableName()
    {
        return $this->model->getTable();
    }

    /**
     * Get all
     * @return Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed|null
     */
    public function find($id)
    {
        $result = $this->model->find($id);
        return $result;
    }

    /**
     * @param $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOrFail($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    /**
     * Insert into database
     * @param array $attributes
     * @param \App\Models\User|null $author
     * @return mixed
     */
    public function create($attributes = [], $author = null)
    {
        if ($author) {
            $currentUser = $author;
        } else if (auth()->user()) {
            $currentUser = auth()->user();
        } else {
            $currentUser = (object) [
                'id' => 'unknown_user_id',
            ];
        }        

        return $this->model->create(array_merge($attributes, [
            'created_user' => $currentUser->id,
            'updated_user' => $currentUser->id,
        ]));
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @param \App\Models\User|null $author
     * @return mixed
     */
    public function update($id, $attributes = [], $author = null)
    {
        $currentUser = $author ? $author : auth()->user();

        $result = $this->find($id);

        if ($result) {
            $result->update(array_merge($attributes, [
                'updated_user' => $currentUser->id,
            ]));

            return $result;
        }

        return false;
    }

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
}
