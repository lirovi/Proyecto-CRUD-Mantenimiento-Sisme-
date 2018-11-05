<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\CargoRequest;
use Sisme\Cargo;


class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::orderBy('id','descripcion')->paginate(8);
    return view('cargo.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $cargos= new Cargo();
       $cargos->descripcion = $request->input('descripcion');
       $cargos->save();
       return('Grabado');
    }
     */
    public function store(CargoRequest $request)
    {
        //
        $cargo = new Cargo;
        $cargo->descripcion = $request->descripcion;

        $cargo->save();

        return redirect()->route('cargos.index')
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
        $cargo = Cargo::find($id);
        return view('cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vcargo = Cargo::find($id);
        return view('cargo.edit', compact('vcargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CargoRequest $request, $id)
    {
        //
        $cargo = Cargo::find($id);
        $cargo->descripcion = $request->descripcion;

        $cargo->save();

        return redirect()->route('cargos.index')
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
        $cargo = Cargo::find($id);
        $cargo->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
