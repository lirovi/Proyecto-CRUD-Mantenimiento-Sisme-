<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\DesignacionRequest;
use Sisme\Designacion;


class DesignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designacions = Designacion::orderBy('id','descripcion')->paginate(8);
    return view('designacion.index', compact('designacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('designacion.create');
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
        $designacion = new Designacion;
        $designacion->descripcion = $request->descripcion;
        $designacion->fun_id = $request->fun_id;
        $designacion->cargo_id = $request->cargo_id;
        $designacion->fechadesigna = $request->fecha_designa;
        $designacion->estado = $request->estado;

        $designacion->save();

        return redirect()->route('designacions.index')
                        ->with('info','El nuevo registro ha sido guardado');
    }

    public function show($id)
    {
        $designacion = Designacion::find($id);
        return view('designacion.show', compact('designacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vdesignacion = Designacion::find($id);
        return view('designacion.edit', compact('vdesignacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DesignacionRequest $request, $id)
    {
        //
        $designacion = Designacion::find($id);
        $designacion->descripcion = $request->descripcion;
        $designacion->fun_id = $request->fun_id;
        $designacion->cargo_id = $request->cargo_id;
        $designacion->fechadesigna = $request->fecha_designa;
        $designacion->estado = $request->estado;

        $designacion->save();

        return redirect()->route('designacions.index')
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
        $designacion = Designacion::find($id);
        $designacion->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
