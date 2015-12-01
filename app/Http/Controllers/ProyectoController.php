<?php

namespace ProyectoPIS\Http\Controllers;
use ProyectoPIS\Http\Requests\ProyectoRequest;
use ProyectoPIS\Http\Controllers\Controller;
use ProyectoPIS\CategoriaRiesgo;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\TipoProyecto;
use Illuminate\Http\Request;
use ProyectoPIS\Proyecto;
use Session;
use Auth;
use DB;

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
    public function store(ProyectoRequest $request)
    {
        //Manipular valores para su insercion
        $tipo = $request['tipo'];
        $id = DB::table('tipoProyecto')->where('tipo',$tipo)->value('id');
        
        //creando un nuevo registro en la tabla
        Proyecto::create([
            'nombreProyecto' => $request['nombreProyecto'],
            'fechaInicio' => $request['fechaInicio'],
            'fechaFin' => $request['fechaFin'],
            'descripcion' => $request['descripcion'],
            'tipo_proyecto_id' => $id,
            ]);
        $idProyecto = DB::table('proyecto')->max('id');
        
        //creando una relacion proyecto-usuario
        $proyecto = Proyecto::find($idProyecto);
        $auth = Auth::user();
        $proyecto->users()->attach($auth, array('jefe' => true));
        return redirect()->route('asociarUsuarios',compact('idProyecto'));

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        $users = Proyecto::find($id)->users;
        $riesgos = Proyecto::find($id)->riesgos;
        $categorias = DB::table('categoriariesgo')->get();
        foreach ($categorias as $categoria) {
            $categoriaArr[] = $categoria->nombreCategoria;
        }
        return view('proyecto.show',compact('id','users','riesgos','categoriaArr','proyecto'));
        //return "hola";
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