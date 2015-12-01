<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use ProyectoPIS\User;
use Auth;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => 'indexUsuario']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->count();
        $proyectos = DB::table('proyecto')->count();
        $riesgos = DB::table('riesgo')->count();
        return view('indexInvitado',compact('users','proyectos','riesgos'));
    }

    public function indexUsuario()
    {
        $proyectos = DB::table('proyecto')->get();
        $riesgos = DB::table('riesgo')->get();
        $countProyectos = count($proyectos);
        $countRiesgos = count($riesgos);
        return view('indexUsuario',compact('proyectos','riesgos','countProyectos','countRiesgos'));
    }

    
}
