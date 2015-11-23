<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Controllers\Controller;
use ProyectoPIS\TipoProyecto;
use ProyectoPIS\Proyecto;

class ProyectoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = DB::table('proyecto')->max('id');
        $count = $count + 1;
        $tipos = TipoProyecto::lists('tipo');
        return view('proyecto.create',compact('tipos','count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request['tipo'];
        $id = DB::table('tipoProyecto')->where('tipo',$tipo)->value('id');

        Proyecto::create([
            'nombreProyecto' => $request['nombreProyecto'],
            'fechaInicio' => $request['fechaInicio'],
            'fechaFin' => $request['fechaFin'],
            'descripcion' => $request['descripcion'],
            'tipo_proyecto_id' => $id,
            ]);
        $count = DB::table('proyecto')->max('id');
        return redirect()->route('asociarRiesgos',compact('count'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}