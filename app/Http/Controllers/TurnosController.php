<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turno;
use Carbon\Carbon;

class TurnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = Turno::orderBy('id','DESC')->paginate();
        return view('turnos.listar', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $turnos = new Turno;
        $turnos->descripcion = $request->get('descripcion');
        $turnos->hora_inicio = $request->get('hora_inicio');
        $turnos->hora_salida = $request->get('hora_salida');
        $turnos->save();
        // return 'hola';
        return redirect()->to('turnos'); 
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
        $turnos = Turno::find($id);
        return view('turnos.editar', compact('turnos'));
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
        $turnos = Turno::find($id);
        $turnos->descripcion = $request->descripcion;
        $turnos->hora_inicio = $request->hora_inicio;
        $turnos->hora_salida = $request->hora_salida;
        $turnos->save();
        return redirect()->to('turnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turnos = Turno::find($id);
        $turnos->delete();

        return back()->with('info', 'El`proveedor fue eliminado');
    }
}
