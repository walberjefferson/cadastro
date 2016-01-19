<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CccRepository;
use App\Models\Ccc;

/**
 * Class CccRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CccRepositoryEloquent extends BaseRepository implements CccRepository
{
    public function lists()
    {
        return $this->model->lists('nome', 'id');
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Ccc::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
