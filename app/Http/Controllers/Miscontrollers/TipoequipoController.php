<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\TipoequipoRequest;
use Sisme\Tipoequipo;


class TipoequipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoequipos = tipoequipo::orderBy('id','descripcion')->paginate(8);
    return view('tipoequipo.index', compact('tipoequipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipoequipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $tipoequipos= new tipoequipo();
       $tipoequipos->descripcion = $request->input('descripcion');
       $tipoequipos->save();
       return('Grabado');
    }
     */
    public function store(tipoequipoRequest $request)
    {
        //
        $tipoequipo = new Tipoequipo;
        $tipoequipo->descripcion = $request->descripcion;

        $tipoequipo->save();

        return redirect()->route('tipoequipos.index')
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
        $tipoequipo = Tipoequipo::find($id);
        return view('tipoequipo.show', compact('tipoequipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vtipoequipo = Tipoequipo::find($id);
        return view('tipoequipo.edit', compact('vtipoequipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoequipoRequest $request, $id)
    {
        //
        $tipoequipo = Tipoequipo::find($id);
        $tipoequipo->descripcion = $request->descripcion;

        $tipoequipo->save();

        return redirect()->route('tipoequipos.index')
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
        $tipoequipo = Tipoequipo::find($id);
        $tipoequipo->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
