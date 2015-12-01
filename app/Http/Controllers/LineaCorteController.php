<?php

namespace ProyectoPIS\Http\Controllers;

use DB;
use Session;
use ProyectoPIS\Proyecto;
use Illuminate\Http\Request;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Controllers\Controller;

class LineaCorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idProyecto,$linea)
    {
        $proyecto = Proyecto::find($idProyecto);
        $nombreProyecto = $proyecto->nombreProyecto;
        $riesgos = Proyecto::find($idProyecto)->riesgos;
        

        $lista = array();
        foreach ($proyecto->riesgos as $riesgo)
        {
            
            switch ($riesgo->pivot->impactoRiesgo) {
                case 'Catastrofico':
                $imp = 10;
                break;
                case 'Critico':
                $imp = 7;
                break;
                case 'Marginal':
                $imp = 4;
                break;
                default:
                $imp = 1;
                break;
            }
            
            $array = array();
            $array[] = $riesgo->id;
            $array[] = $riesgo->nombreRiesgo;
            $array[] = $riesgo->pivot->impactoRiesgo;
            $array[] = $riesgo->pivot->probRiesgo;
            $lista = array_add($lista, $imp*($riesgo->pivot->probRiesgo) , $array);
            
        }
        krsort($lista);
        return view('riesgo.lineacorte',compact('nombreProyecto','lista','linea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombreProyecto = $request['nombreProyecto'];
        $idProyecto = DB::table('proyecto')->where('nombreProyecto', $nombreProyecto)->value('id');
        $linea = $request['linea'];
        $count = $request['count'];
        if(!is_numeric($linea)){
                    $linea = round($count/2);
                    Session::flash('message-error','Solo se permiten valores numericos');
                    return redirect()->route('lineacorte',compact('idProyecto','linea'));
        }else if($linea <0 || $linea > $count){
                    $linea = round($count/2);
                    Session::flash('message-error','Debe de ser un valor comprendido entre 0 y '.$count);
                    return redirect()->route('lineacorte',compact('idProyecto','linea'));
        }
        else{
            return redirect()->route('lineacorte',compact('idProyecto','linea'));
        }
        
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
