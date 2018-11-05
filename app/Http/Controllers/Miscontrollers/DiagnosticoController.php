<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\DiagnosticoRequest;
use Sisme\Diagnostico;


class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosticos = Diagnostico::orderBy('id','descripcion')->paginate(8);
    return view('diagnostico.index', compact('diagnosticos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('diagnostico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $diagnosticos= new diagnostico();
       $diagnosticos->descripcion = $request->input('descripcion');
       $diagnosticos->save();
       return('Grabado');
    }
     */
    public function store(DiagnosticoRequest $request)
    {
        //
        $diagnostico = new Diagnostico;
        $diagnostico->descripcion = $request->descripcion;

        $diagnostico->save();

        return redirect()->route('diagnosticos.index')
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
        $diagnostico = Diagnostico::find($id);
        return view('diagnostico.show', compact('diagnostico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vdiagnostico = Diagnostico::find($id);
        return view('diagnostico.edit', compact('vdiagnostico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiagnosticoRequest $request, $id)
    {
        //
        $diagnostico = Diagnostico::find($id);
        $diagnostico->descripcion = $request->descripcion;

        $diagnostico->save();

        return redirect()->route('diagnosticos.index')
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
        $diagnostico = Diagnostico::find($id);
        $diagnostico->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
