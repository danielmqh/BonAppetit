<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
// use App\http\Requests\

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::orderBy('id','DESC')->paginate();
        return view('mesas.listar', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mesas = new Mesa;
        $mesas->num_mesa = $request->get('num_mesa');
        $mesas->cantidad_silla_mesa = $request->get('cantidad_silla_mesa');
        $mesas->descripcion = $request->get('descripcion');
        $mesas->save();

        return redirect()->to('mesas');
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
        $mesas = Mesa::find($id);
        return view('mesas.editar', compact('mesas'));
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
        $mesas = Mesa::find($id);
        $mesas->num_mesa = $request->num_mesa;
        $mesas->cantidad_silla_mesa = $request->cantidad_silla_mesa;
        $mesas->descripcion = $request->descripcion;
        $mesas->save();
        // return 'hola';

        return redirect()->to('mesas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesas = Mesa::find($id);
        $mesas->delete();

        return back()->with('info', 'La Mesa fue eliminada');
    }
}
