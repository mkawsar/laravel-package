<?php

namespace App\Repository;

use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function paginate($limit = null, $columns = ['*'], $order = null, $direction = null);

    public function findWhere(array $where, $columns = ['*']);
}
