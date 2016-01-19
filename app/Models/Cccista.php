<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cccista extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['nome', 'endereco', 'data_nasc', 'email', 'tel1', 'tel2', 'cidade', 'ccc_id'];
    
    public function ccc()
    {
        return $this->belongsTo(Ccc::class);
    }
    
    public function niverMes($mes){
        return Cccista::where(\DB::raw('MONTH(data_nasc)'), '=', $mes)->get();
    }

}
