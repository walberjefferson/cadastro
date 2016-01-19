<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CccistaRepository;
use App\Models\Cccista;

/**
 * Class CccistaRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CccistaRepositoryEloquent extends BaseRepository implements CccistaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Cccista::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
