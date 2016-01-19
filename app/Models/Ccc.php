<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ccc extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['nome', 'data_inic', 'data_fim', 'tema', 'cidade'];
    
    public function cccista()
    {
        return $this->hasMany(Cccista::class);
    }

}
