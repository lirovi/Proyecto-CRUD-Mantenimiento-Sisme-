<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\ProfesionRequest;
use Sisme\Profesion;


class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesions = Profesion::orderBy('id','descripcion')->paginate(8);
    return view('profesion.index', compact('profesions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesion.create');
    }

    public function store(ProfesionRequest $request)
    {
        //
        $profesion = new Profesion;
        $profesion->descripcion = $request->descripcion;

        $profesion->save();

        return redirect()->route('profesions.index')
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
        $profesion = Profesion::find($id);
        return view('profesion.show', compact('profesion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vprofesion = Profesion::find($id);
        return view('profesion.edit', compact('vprofesion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfesionRequest $request, $id)
    {
        //
        $profesion = Profesion::find($id);
        $profesion->descripcion = $request->descripcion;

        $profesion->save();

        return redirect()->route('profesions.index')
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
        $profesion = Profesion::find($id);
        $profesion->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
