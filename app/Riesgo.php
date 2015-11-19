<?php

namespace ProyectoPIS;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    protected $table = 'riesgo';

    protected $fillable = ['nombreRiesgo', 'descripcion', 'probRiesgo', 'factoresRiesgo', 'reduccionRiesgo', 'supervisionRiesgo', 'impactoRiesgo', 'categoria_riesgo_id'];


    public function categoriaRiesgo()
    {
        return $this->belongsTo('ProyectoPIS\CategoriaRiesgo');
    }

    public function proyectos()
    {
        return $this->belongsToMany('ProyectoPIS\Proyecto');
    }


}
