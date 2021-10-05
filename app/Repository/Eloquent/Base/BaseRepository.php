<?php

namespace App\Repository\Eloquent\Base;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attribute
     * @return Model
     */
    public function create(array $attribute): Model
    {
        return $this->model->create($attribute);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}
