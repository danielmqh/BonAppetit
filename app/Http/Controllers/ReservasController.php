<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use App\Reserva;
use App\Cliente;

class ReservasController extends Controller
{
    public function exportPdf()
    {
        $reservas = Reserva::get();
        $pdf   = PDF::loadView('pdf.reservas', compact('reservas'));
    	return $pdf->download('reserva-list.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::orderBy('id', 'DESC')->paginate();
        return view('reservas.listar', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Cliente::all();
        // return $cargo;
        return view('reservas.crear',[
            'clientes' => $cliente,
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
        $reservas = new Reserva;
        $reservas->fecha_reserva = $request->get('fecha_reserva');
        $reservas->hora_reserva = $request->get('hora_reserva');
        $reservas->hora_fin_reserva = $request->get('hora_fin_reserva');
        $reservas->cliente_id = $request->get('id_clien');
        $reservas->save();

        return redirect()->to('reservas');
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
        $reservas = Trabajador::find($id);
        $cargo = Cargo::all();
        $turno = Turno::all();
        return view('reservas.editar', compact('reservas'),[
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
        $reservas = Reserva::find($id);
        $reservas->nombre = $request->nombre;
        $reservas->ap_paterno = $request->ap_paterno;
        $reservas->ap_materno = $request->ap_materno;
        $reservas->ci = $request->ci;
        $reservas->genero = $request->genero;
        $reservas->correo = $request->correo;
        $reservas->telefono = $request->telefono;

        $reservas->cargo_id = $request->id_carg;
        $reservas->turno_id = $request->id_tur;
        
        $reservas->save();
        return redirect()->to('reservas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservas = Reserva::find($id);
        $reservas->delete();
        return back()->with('info', 'La reservas fue eliminado');
    }
}
