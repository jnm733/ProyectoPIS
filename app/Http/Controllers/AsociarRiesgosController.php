<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ProyectoPIS\Proyecto;
use ProyectoPIS\Riesgo;
use ProyectoPIS\CategoriaRiesgo;
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
        $asociados = Proyecto::find($id)->riesgos;
        
        $riesgos = Riesgo::All();

        return view('riesgo.asociarRiesgos',compact('id','proyecto','riesgos','asociados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $impacto = $request['impacto'];
        $riesgos = $request['riesgos'];
        $prob = $request['prob'];

        $idRiesgo = $riesgos[0];
        $numImpacto = $idRiesgo-1;
        $primerProb = $prob[$numImpacto];
        $primerImpacto = $impacto[$numImpacto];

        dd('impacto',$impacto,'riesgos',$riesgos,'prob',$prob, 'Riesgo-Impacto-prob',$idRiesgo,$primerImpacto,$primerProb);
        //Array de asociados actualmente
        $riesgos = $request['riesgos'];
        $proyecto = Proyecto::find($request['idProyecto']);
        $asociados = $proyecto->riesgos()->get();

        $count = count($riesgos);
        if($count < 1){
            foreach ($asociados as $asociado) {
                $proyecto->riesgos()->detach($asociado);
            }
            return redirect()->route('index');
        }

        //Array de asociados al principio
        $idAsociados = array();
        $idRiesgos = array();
        //Pasamos los registros de la tabla a valores de id
        foreach ($asociados as $asociado) {
            array_push ( $idAsociados , ''.$asociado->id.'' );
        }
        
        //Recorre el array de id de riesgos asociados
        foreach ($idAsociados as $asociado) {
            if (!in_array($asociado, $riesgos)) {//Si el array de riesgos asociados actual no contiene el riesgo asociado
                $proyecto->riesgos()->detach($asociado);//Lo desvincula del proyecto
            }       
        }

        //Recorremos el array con los nuevos riesgos asociados
        foreach ($riesgos as $riesgo) {
            if(!$asociados->contains($riesgo)){//Si el array de riesgos asociados no contiene el riesgo
                $proyecto->riesgos()->attach($riesgo);//Se vincula al proyecto
            }

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
