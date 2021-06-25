<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_bebida;

class Tipo_bebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_bebidas = Tipo_bebida::orderBy('id', 'DESC')->paginate();
        return view('tipo_bebidas.listar', compact('tipo_bebidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_bebidas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_bebidas = new Tipo_bebida;
        $tipo_bebidas->nombre = $request->get('nombre');
        $tipo_bebidas->save();
        return redirect()->to('tipo_bebidas');
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
        $tipo_bebidas = Tipo_bebida::find($id);
        return view('tipo_bebidas.editar', compact('tipo_bebidas'));
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
        $tipo_bebidas = Tipo_bebida::find($id);
        $tipo_bebidas->nombre = $request->get('nombre');
        $tipo_bebidas->save();
        // return $request->all();

        return redirect()->to('tipo_bebidas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_bebidas = Tipo_bebida::find($id);
        $tipo_bebidas->delete();

        return back()->winth('info', 'La bebida fue eliminado');
    }
}
