<?php

namespace ProyectoPIS;

use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    protected $table = 'tipoProyecto';

    protected $fillable = ['tipo'];

    public function proyectos()
    {
        return $this->hasMany('ProyectoPIS\Proyecto');
    }
}
