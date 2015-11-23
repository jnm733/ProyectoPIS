<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ProyectoPIS\Proyecto;
use ProyectoPIS\Riesgo;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Controllers\Controller;

class AsociarRiesgosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $proyecto = DB::table('proyecto')->where('id',$id)->value('nombreProyecto');
        $riesgos = Riesgo::lists('nombreRiesgo');
        return view('riesgo.asociarRiesgos',compact('id','proyecto','riesgos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riesgos = $request['riesgos'];
        $proyecto = Proyecto::find($request['idProyecto']);
        foreach ($riesgos as $riesgo) {
            $idRiesgo = DB::table('riesgo')->where('nombreRiesgo',$riesgo)->value('id');
            $proyecto->riesgos()->attach($idRiesgo);
        }

        return redirect()->route('index');
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
