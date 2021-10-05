<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\Eloquent\Base\BaseRepository;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function paginate($limit = null, $columns = ['*'])
    {
        return $this->model->paginate($limit, $columns);
    }

    public function findWhere(array $where, $columns = ['*'])
    {
        foreach ($where as $field => $value) {
            if (is_array($value)) {
                list($field, $condition, $val) = $value;
                $this->model = $this->model->where($field, $condition, $val);
            } else {
                $this->model = $this->model->where($field, '=', $value);
            }
        }
        return $this->model->get($columns);
    }
}
