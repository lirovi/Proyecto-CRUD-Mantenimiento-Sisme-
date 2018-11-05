<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\SolucionRequest;
use Sisme\Solucion;


class SolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solucions = Solucion::orderBy('id','descripcion')->paginate(8);
    return view('solucion.index', compact('solucions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('solucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $solucions= new solucion();
       $solucions->descripcion = $request->input('descripcion');
       $solucions->save();
       return('Grabado');
    }
     */
    public function store(SolucionRequest $request)
    {
        //
        $solucion = new Solucion;
        $solucion->descripcion = $request->descripcion;

        $solucion->save();

        return redirect()->route('solucions.index')
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
        $solucion = Solucion::find($id);
        return view('solucion.show', compact('solucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vsolucion = Solucion::find($id);
        return view('solucion.edit', compact('vsolucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolucionRequest $request, $id)
    {
        //
        $solucion = Solucion::find($id);
        $solucion->descripcion = $request->descripcion;

        $solucion->save();

        return redirect()->route('solucions.index')
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
        $solucion = Solucion::find($id);
        $solucion->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
