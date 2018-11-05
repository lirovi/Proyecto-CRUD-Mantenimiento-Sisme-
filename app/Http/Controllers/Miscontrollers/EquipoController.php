<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\EquipoRequest;
use Sisme\Tipoequipo;
use Sisme\Equipo;


class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::orderBy('id','descripcion')->paginate(8);
    return view('equipo.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tequipos = Tipoequipo::All()->pluck('descripcion', 'id');
        return view('equipo.create', compact('vequipo','vtequipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipoRequest $request)
    {
        //
       $equipos= new Equipo;
       $equipos->descripcion = $request->descripcion;
       $equipos->tequipo_id = $request->tequipo_id;
       $equipos->cod_af = $request->cod_af;
       $equipos->serie = $request->serie;
       $equipos->fecha_ing = $request->fecha_ing;
       $equipos->save();
       return redirect()->route('equipos.index')
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
        $equipo = Equipo::find($id);
        return view('equipo.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vequipo = Equipo::find($id);
        $vtequipos = Tipoequipo::All()->pluck('descricpion', 'id');
 
        return view('equipo.edit', compact('vequipo','vtequipos'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(EquipoRequest $request, $id)
    {
        //
        $equipo = Equipo::find($id);
        $equipo->nombre = $request->descripcion;
        $equipo->tequipo_id = $request->tequipo_id;
        $equipos->cod_af = $request->cod_af;
        $equipos->serie = $request->serie;
        $equipos->fecha_ing = $request->fecha_ing;
        $equipo->save();

        return redirect()->route('equipos.index')
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
        $equipo = Equipo::find($id);
        $equipo->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
