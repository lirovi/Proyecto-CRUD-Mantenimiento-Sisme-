<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
//use Sisme\Http\Requests\CargoRequest;
use Sisme\Cargo;


class CargoController extends Controller
{
  
    public function index()
    {
        $cargos = Cargo::get();
        return view('cargo.index');

    }

   
    public function create()
    {
        //
        return view('cargo.create');
    }

  
    public function store(CargoRequest $request)
    {
        //
        $cargo = new Cargo;
        $cargo->descripcion = $request->descripcion;

        $cargo->save();

        return redirect()->route('cargos.index')
                        ->with('info','El nuevo registro ha sido guardado');
    }

   
    public function edit($id)
    {
        $vcargo = Cargo::findOrFail($id);
        return '$vcargo';
    }

   
    public function update(CargoRequest $request, $id)
    {
        //
        $cargo = Cargo::find($id);
        $cargo->descripcion = $request->descripcion;

        $cargo->save();

        return redirect()->route('cargos.index')
                        ->with('info','El registro ha sido actualizado ->'. $id);
    }

   
    public function destroy($id)
    {
        //
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();
       
    }
    
   
}
