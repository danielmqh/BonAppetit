<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajador;
use App\Cargo;
use App\Turno;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajador::orderBy('id', 'DESC')->paginate();
        return view('trabajadores.listar', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo = Cargo::all();
        $turno = Turno::all();
        // return $cargo;
        return view('trabajadores.crear',[
            'cargos' => $cargo,
            'turnos' => $turno
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajadores = new Trabajador;
        $trabajadores->nombre = $request->get('nombre');
        $trabajadores->ap_paterno = $request->get('ap_paterno');
        $trabajadores->ap_materno = $request->get('ap_materno');
        $trabajadores->ci = $request->get('ci');
        $trabajadores->genero = $request->get('genero');
        $trabajadores->correo = $request->get('correo');
        $trabajadores->telefono = $request->get('telefono');

        $trabajadores->cargo_id = $request->get('id_carg');
        $trabajadores->turno_id = $request->get('id_tur');
        // return 'hola';
        // return $request->all();
        $trabajadores->save();   
        return redirect()->to('trabajadores');
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
        $trabajadores = Trabajador::find($id);
        $cargo = Cargo::all();
        $turno = Turno::all();
        return view('trabajadores.editar', compact('trabajadores'),[
            'cargos' => $cargo,
            'turnos' => $turno
        ]);
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
        $trabajadores = Trabajador::find($id);
        $trabajadores->nombre = $request->nombre;
        $trabajadores->ap_paterno = $request->ap_paterno;
        $trabajadores->ap_materno = $request->ap_materno;
        $trabajadores->ci = $request->ci;
        $trabajadores->genero = $request->genero;
        $trabajadores->correo = $request->correo;
        $trabajadores->telefono = $request->telefono;

        $trabajadores->cargo_id = $request->id_carg;
        $trabajadores->turno_id = $request->id_tur;
        
        $trabajadores->save();
        return redirect()->to('trabajadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajadores = Trabajador::find($id);
        $trabajadores->delete();
        return back()->with('info', 'El trabajador fue eliminado');
    }
}
