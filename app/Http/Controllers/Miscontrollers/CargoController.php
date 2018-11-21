<?php

namespace Sisme\Http\Controllers\Miscontrollers;

use Illuminate\Http\Request;
use Sisme\Http\Controllers\Controller;
use Sisme\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cargos = Cargo::orderBy('id', 'DESC')->paginate(2);

        return [
            'pagination' => [
                'total'         => $cargos->total(),
                'current_page'  => $cargos->currentPage(),
                'per_page'      => $cargos->perPage(),
                'last_page'     => $cargos->lastPage(),
                'from'          => $cargos->firstItem(),
                'to'            => $cargos->lastItem(),
            ],
            'cargos' => $cargos
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required'
        ]);

        Cargo::create($request->all());

        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'descripcion' => 'required',
        ]);

        cargo::find($id)->update($request->all());

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargos = cargo::findOrFail($id);
        $cargos->delete();
    }
}
