<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\UnidadRequest;
use Sisme\Unidad;
use Sisme\Dpto;


class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $unidads = Unidad::orderBy('id','nombre')->paginate(8);
    return view('unidad.index', compact('unidads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vdptos = Dpto::All()->pluck('nombre', 'id');
 
        return view('unidad.create', compact('vunidad','vdptos'));
        //return view('unidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $unidads= new unidad();
       $unidads->descripcion = $request->input('descripcion');
       $unidads->save();
       return('Grabado');
    }
     */
    public function store(UnidadRequest $request)
    {
        //
        $unidad = new Unidad;
        $unidad->nombre = $request->nombre;
        $unidad->dpto_id = $request->dpto_id;

        $unidad->save();

        return redirect()->route('unidads.index')
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
        $unidad = Unidad::find($id);
        return view('unidad.show', compact('unidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vunidad = Unidad::find($id);
        $vdptos = Dpto::All()->pluck('nombre', 'id');
 
        return view('unidad.edit', compact('vunidad','vdptos'));
        /*return view('unidad.edit', compact('vunidad'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnidadRequest $request, $id)
    {
        //
        $vunidad = Unidad::find($id);
        $vunidad->nombre = $request->nombre;
        $vunidad->dpto_id = $request->dpto_id;

        $vunidad->save();

        return redirect()->route('unidads.index')
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
        $vunidad = Unidad::find($id);
        $vunidad->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
