<?php

namespace ProyectoPIS;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';

    protected $fillable = ['nombreProyecto', 'fechaInicio', 'fechaFin', 'descripcion', 'tipo_proyecto_id'];

    public function users()
    {
        return $this->belongsToMany('ProyectoPIS\User')->withPivot('jefe')->withTimestamps();
    }

    public function tipoProyecto()
    {
        return $this->belongsTo('ProyectoPIS\TipoProyecto');
    }

    public function riesgos()
    {
        //$this->belongsToMany('ProyectoPIS\Riesgo')->withTimestamps();

       //return $this->belongsToMany('ProyectoPIS\Riesgo')->withPivot('probRiesgo','impactoRiesgo','createt_at','updated_at');
       return $this->belongsToMany('ProyectoPIS\Riesgo')->withPivot('probRiesgo','impactoRiesgo')->withTimestamps();
    }
}
