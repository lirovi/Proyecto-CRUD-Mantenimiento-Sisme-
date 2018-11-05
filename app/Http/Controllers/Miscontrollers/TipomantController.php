<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Http\Requests\TipomantRequest;
use Sisme\Tipomant;


class TipomantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipomants = Tipomant::orderBy('id','descripcion')->paginate(8);
    return view('tipomant.index', compact('tipomants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipomant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     public function store(Request $request)
    {
        //
       $tipomans= new tipoman();
       $tipomans->descripcion = $request->input('descripcion');
       $tipomans->save();
       return('Grabado');
    }
     */
    public function store(TipomantRequest $request)
    {
        //
        $tipomant = new Tipomant;
        $tipomant->descripcion = $request->descripcion;

        $tipomant->save();

        return redirect()->route('tipomants.index')
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
        $tipomant = Tipomant::find($id);
        return view('tipomant.show', compact('tipomant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vtipoman = Tipomant::find($id);
        return view('tipomant.edit', compact('vtipoman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipomantRequest $request, $id)
    {
        //
        $tipomant = Tipomant::find($id);
        $tipomant->descripcion = $request->descripcion;

        $tipomant->save();

        return redirect()->route('tipomants.index')
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
        $tipoman = Tipomant::find($id);
        $tipoman->delete();

        return back()->with('info', 'El registro fue eliminado');
    }
}
