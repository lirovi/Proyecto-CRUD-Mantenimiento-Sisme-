<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\MantenimientoRequest;
use Sisme\Mantenimiento;
use Sisme\Equipo;
use Sisme\Funcionario;
use Sisme\Tipomant;
use Sisme\Diagnostico;
use Sisme\Solucion;


class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantenimientos = mantenimiento::orderBy('id','nombre')->paginate(8);
    return view('mantenimiento.index', compact('mantenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vequipos = Equipo::All()->pluck('descripcion', 'id');
 
        return view('mantenimiento.create', compact('vmantenimiento','vequipos'));
        //return view('mantenimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $mantenimientos= new mantenimiento();
       $mantenimientos->descripcion = $request->input('descripcion');
       $mantenimientos->save();
       return('Grabado');
    }
     */
    public function store(MantenimientoRequest $request)
    {
        //
        $mantenimiento = new Mantenimiento;
       
        $mantenimiento->equipo_id = $request->equipo_id;
        $mantenimiento->fun_id = $request->fun_id;
        $mantenimiento->tecnico_id = $request->tecnico_id;
        $mantenimiento->tipoman_id = $request->tipoman_id;
        $mantenimiento->diag_id = $request->diago_id;
        $mantenimiento->fechadiag = $request->fechadiag;
        $mantenimiento->solucion_id = $request->solucion_id;
        $mantenimiento->fechasol = $request->fechasol;

        $mantenimiento->save();

        return redirect()->route('mantenimientos.index')
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
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.show', compact('mantenimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vmantenimiento = Mantenimiento::find($id);
        $vdptos = Dpto::All()->pluck('nombre', 'id');
 
        return view('mantenimiento.edit', compact('vmantenimiento','vdptos'));
        /*return view('mantenimiento.edit', compact('vmantenimiento'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MantenimientoRequest $request, $id)
    {
        //
        $mantenimiento = mantenimiento::find($id);
        
        $mantenimiento->equipo_id = $request->equipo_id;
        $mantenimiento->fun_id = $request->fun_id;
        $mantenimiento->tecnico_id = $request->tecnico_id;
        $mantenimiento->tipoman_id = $request->tipoman_id;
        $mantenimiento->diag_id = $request->diago_id;
        $mantenimiento->fechadiag = $request->fechadiag;
        $mantenimiento->solucion_id = $request->solucion_id;
        $mantenimiento->fechasol = $request->fechasol;

        $mantenimiento->save();

        return redirect()->route('mantenimientos.index')
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
        $mantenimiento = Mantenimiento::find($id);
        $mantenimiento->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
