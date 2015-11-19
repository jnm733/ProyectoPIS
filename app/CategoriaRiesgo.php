<?php

namespace ProyectoPIS;

use Illuminate\Database\Eloquent\Model;

class CategoriaRiesgo extends Model
{
    protected $table = 'categoriaRiesgo';

    protected $fillable = ['nombreCategoria'];

    public function riesgos()
    {
        return $this->hasMany('ProyectoPIS\Riesgo');
    }
}
