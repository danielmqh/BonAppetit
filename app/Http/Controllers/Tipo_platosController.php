<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_plato;

class Tipo_platosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_platos = Tipo_plato::orderBy('id', 'DESC')->paginate();
        return view('tipo_platos.listar', compact('tipo_platos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_platos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_platos = new Tipo_plato;
        $tipo_platos->nombre_tipo_plato = $request->get('nombre_tipo_plato');
        $tipo_platos->save();
        return redirect()->to('tipo_platos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_platos = Tipo_plato::find($id);
        return view('tipo_platos.editar', compact('tipo_platos'));
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
        $tipo_platos = Tipo_plato::find($id);
        $tipo_platos->nombre_tipo_plato = $request->nombre_tipo_plato;
        $tipo_platos->save();

        return redirect()->to('tipo_platos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_platos = Tipo_plato::find($id);
        $tipo_platos->delete();
        return back()->winth('info', 'El plato fue eliminado');
    }
}
