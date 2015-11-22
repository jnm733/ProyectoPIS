<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Controllers\Controller;

class FrontController extends Controller
{
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

        return view('indexUsuario');
    }

    
}
