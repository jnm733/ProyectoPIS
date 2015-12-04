<?php

namespace ProyectoPIS\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use ProyectoPIS\User;
use Session;
use Closure;

class Jefe
{
    protected $auth;
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $path = $_SERVER['REQUEST_URI'];
        $trozos = explode ("/", $path);
        $idProyecto = $trozos[count($trozos)-1];
        $idUser = $this->auth->user()->id;
        $proyectos = $this->auth->user()->proyectos;
        if($idProyecto == "asociarUsuarios"){
            return $next($request);
        }
        foreach ($proyectos as $proyecto) {
            if($proyecto->id == $idProyecto){
                if($proyecto->pivot->jefe == 1){
                    return $next($request);
                }
            }
        }
        Session::flash('message-error','No tienes permisos');
        return redirect()->route('/');
        
    }
}
