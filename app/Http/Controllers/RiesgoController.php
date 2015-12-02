<?php

namespace ProyectoPIS\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ProyectoPIS\Proyecto;
use ProyectoPIS\CategoriaRiesgo;
use ProyectoPIS\Riesgo;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Controllers\Controller;
use ProyectoPIS\Http\Requests\RiesgoRequest;
use ProyectoPIS\Http\Controllers\AsociarRiesgosController;

class RiesgoController extends Controller
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
        $riesgos = Riesgo::All();
        $categorias = DB::table('categoriariesgo')->get();
        foreach ($categorias as $categoria) {
            $categoriaArr[] = $categoria->nombreCategoria;
        }
        return view('riesgo.index',compact('riesgos','categoriaArr'));
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $id = DB::table('riesgo')->max('id');
        $id = $id+1;
        $tipos = CategoriaRiesgo::lists('nombreCategoria');
        return view('riesgo.create',compact('tipos','id','idProyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RiesgoRequest $request)
    {
        $idRiesgo = $request['idProyecto'];
        //dd($idRiesgo);

        $id = DB::table('categoriariesgo')->where('nombreCategoria',$request['tipo'])->value('id');

        Riesgo::create([
            'nombreRiesgo' => $request['nombreRiesgo'],
            'descripcion' => $request['descripcion'],
            'factoresRiesgo' => $request['factores'],
            'reduccionRiesgo' => $request['reduccion'],
            'supervisionRiesgo' => $request['supervision'],
            'categoria_riesgo_id' => $id,
            ]);
        return "<script> self.close() </script>";
        //return view('cerrar');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $riesgo = Riesgo::find($id);
        $categoria = CategoriaRiesgo::find($riesgo->categoria_riesgo_id);
        return view('riesgo.show',compact('riesgo','categoria'));
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
