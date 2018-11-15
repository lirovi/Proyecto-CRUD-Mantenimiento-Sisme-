<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\FuncionarioRequest;
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
        $funcionarios = funcionario::orderBy('id','descripcion')->paginate(8);
    return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('funcionario.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $funcionarios= new funcionario();
       $funcionarios->descripcion = $request->input('descripcion');
       $funcionarios->save();
       return('Grabado');
    }
     */
    public function store(FuncionarioRequest $request)
    {
        //
           $funcionario = new Funcionario;
           $funcionarios->nombre = $request->nombre;
           $funcionarios->apellido = $request->apellido;
           $funcionarios->direccion = $request->direccion;
           $funcionarios->telefono = $request->telefono;
           $funcionarios->sexo = $request->sexo;
           $funcionarios->fecha_nac = $request->fecha_nac;
           $funcionarios->prof_id = $request->prof_id;

        $funcionario->save();

        return redirect()->route('funcionarios.index')
                        ->with('info','El nuevo registro ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = funcionario::find($id);
        return view('funcionario.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vfuncionario = funcionario::find($id);
        return view('funcionario.edit', compact('vfuncionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(funcionarioRequest $request, $id)
    {
        //
        $funcionario = funcionario::find($id);
          $funcionarios->nombre = $request->nombre;
           $funcionarios->apellido = $request->apellido;
           $funcionarios->direccion = $request->direccion;
           $funcionarios->telefono = $request->telefono;
           $funcionarios->sexo = $request->sexo;
           $funcionarios->fecha_nac = $request->fecha_nac;
           $funcionarios->prof_id = $request->prof_id;
        $funcionario->save();

        return redirect()->route('funcionarios.index')
                        ->with('info','El registro ha sido actualizado ->'. $id);
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
        $funcionario = funcionario::find($id);
        $funcionario->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
