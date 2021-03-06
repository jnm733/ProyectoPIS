<?php

namespace ProyectoPIS\Http\Controllers;

use Auth;
use Session;
use Redirect;
use ProyectoPIS\User;
use Illuminate\Http\Request;
use ProyectoPIS\Http\Requests;
use ProyectoPIS\Http\Requests\LoginRequest;
use ProyectoPIS\Http\Controllers\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        
        if($request['remember'] == 'recordar'){
            $recordar = true;
        }else{
            $recordar = false;
        }
        

        if(Auth::attempt(['name' => $request['nombreUsuario'],'password' => $request['password']],$recordar)){
            $proyectos = User::find(Auth::user()->id)->proyectos()->where('jefe', true)->get();
            Session::put('proyectos',$proyectos);
            return redirect()->route('index');
        }
        Session::flash('message-error','Datos incorrectos');
        return redirect()->route('/');
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
