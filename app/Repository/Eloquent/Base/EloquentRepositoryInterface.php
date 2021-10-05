<?php

namespace App\Repository\Eloquent\Base;

use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{
    /**
     * @param array $attribute
     * @return Model
     */
    public function create(array $attribute): Model;

    /**
     * @param $id
     * @return Model|null
     */
    public function find($id): ?Model;
}
