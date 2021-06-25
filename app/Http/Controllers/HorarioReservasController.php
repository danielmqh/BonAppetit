<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario_Reserva;
use App\Reserva;
use App\Mesa;

class HorarioReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarioreservas = Horario_Reserva::orderBy('id', 'DESC')->paginate();
        return view('horarioreservas.listar', compact('horarioreservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reserva = Reserva::all();
        $mesa = Mesa::all();
        // return $cargo;
        return view('HorarioReservas.crear',[
            'reservas' => $reserva,
            'mesas' => $mesa
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
        $horarioreservas = new Horario_Reserva;
        $horarioreservas->mañana = $request->get('mañana');
        $horarioreservas->tarde = $request->get('tarde');
        $horarioreservas->noche = $request->get('noche');
        $horarioreservas->horario_disponible = $request->get('horario_disponible');
        
        $horarioreservas->reserva_id = $request->get('id_rese');
        $horarioreservas->mesa_id = $request->get('id_mes');

        $horarioreservas->save();   
        return redirect()->to('horarioreservas');
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
        $horarioreservas = Horario_Reserva::find($id);
        $cargo = Reserva::all();
        $turno = Mesa::all();
        return view('horarioreservas.editar', compact('horarioreservas'),[
            'reservas' => $reserva,
            'mesas' => $mesa
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
        $horarioreservas = Horario_Reserva::find($id);
        $horarioreservas->mañana = $request->mañana;
        $horarioreservas->tarde = $request->tarde;
        $horarioreservas->noche = $request->noche;
        $horarioreservas->horario_disponible = $request->horario_disponible;


        $horarioreservas->mesa_id = $request->id_mes;
        
        $horarioreservas->save();
        return redirect()->to('horarioreservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarioreservas = Horario_Reserva::find($id);
        $horarioreservas->delete();
        return back()->with('info', 'El trabajador fue eliminado');
    }
}
