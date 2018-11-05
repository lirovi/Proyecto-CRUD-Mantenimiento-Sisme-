<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\DptoRequest;
use Sisme\Dpto;


class DptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dptos = Dpto::orderBy('id','nombre')->paginate(8);
    return view('dpto.index', compact('dptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dpto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $dptos= new dpto();
       $dptos->descripcion = $request->input('descripcion');
       $dptos->save();
       return('Grabado');
    }
     */
    public function store(DptoRequest $request)
    {
        //
        $dpto = new Dpto;
        $dpto->nombre = $request->nombre;

        $dpto->save();

        return redirect()->route('dptos.index')
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
        $dpto = Dpto::find($id);
        return view('dpto.show', compact('dpto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vdpto = Dpto::find($id);
        return view('dpto.edit', compact('vdpto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DptoRequest $request, $id)
    {
        //
        $dpto = Dpto::find($id);
        $dpto->nombre = $request->nombre;

        $dpto->save();

        return redirect()->route('dptos.index')
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
        $dpto = Dpto::find($id);
        $dpto->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
