<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Proyecto;
use ProyectoPIS\User;
use ProyectoPIS\Http\Controllers\Controller;

class AsociarUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $proyecto = DB::table('proyecto')->where('id',$id)->value('nombreProyecto');
        $asociados = Proyecto::find($id)->users;
        $usuarios = User::paginate(5);

        return view('usuario.asociarUsuarios',compact('id','proyecto','usuarios','asociados'));

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
        $idProyecto = $request['idProyecto'];
        
        //Array de asociados actualmente
        $usuarios = $request['usuarios'];
        $proyecto = Proyecto::find($request['idProyecto']);
        $asociados = $proyecto->users()->get();
        
        //Si no hay usuarios asociados
        $count = count($usuarios);
        if($count < 1){
            Session::flash('message-error','Debe asociar un usuario');
            return redirect()->route('/');
        }

        //Array de asociados al principio
        $idAsociados = array();
        $idUsuarios = array();
        //Pasamos los registros de la tabla a valores de id
        foreach ($asociados as $asociado) {
            array_push ( $idAsociados , ''.$asociado->id.'' );
        }
        
        //Recorre el array de id de riesgos asociados
        foreach ($idAsociados as $asociado) {
            if (!in_array($asociado, $usuarios)) {//Si el array de riesgos asociados actual no contiene el riesgo asociado
                $proyecto->users()->detach($asociado);//Lo desvincula del proyecto
            }       
        }

        //Recorremos el array con los nuevos riesgos asociados
        foreach ($usuarios as $usuario) {
            if(!$asociados->contains($usuario)){//Si el array de riesgos asociados no contiene el riesgo
                $proyecto->users()->attach($usuario);//Se vincula al proyecto
            }

        }
        return redirect()->route('asociarRiesgos',compact('idProyecto'));
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
