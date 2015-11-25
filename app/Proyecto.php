<?php

namespace ProyectoPIS;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';

    protected $fillable = ['nombreProyecto', 'fechaInicio', 'fechaFin', 'descripcion', 'tipo_proyecto_id'];

    public function users()
    {
        return $this->belongsToMany('ProyectoPIS\User')->withTimestamps();
    }

    public function tipoProyecto()
    {
        return $this->belongsTo('ProyectoPIS\TipoProyecto');
    }

    public function riesgos()
    {
        return $this->belongsToMany('ProyectoPIS\Riesgo')->withTimestamps();
    }
}
