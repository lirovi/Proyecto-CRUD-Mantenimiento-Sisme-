<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = funcionario::orderBy('id','apellido')->paginate(8);
    return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $funcionarios= new funcionario();
       $funcionarios->nombre = $request->input('nombre');
       $funcionarios->apellido = $request->input('apellido');
       $funcionarios->direccion = $request->input('direccion');
       $funcionarios->telefono = $request->input('telefono');
       $funcionarios->sexo = $request->input('sexo');
       $funcionarios->fecha_nac = $request->input('fecnac');
       $funcionarios->prof_id = $request->input('prof');
       $funcionarios->save();
       return('Grabado');
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
