<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use App\Pedido;
use App\Cliente;
use App\Mesa;
use App\Trabajador;

class PedidosController extends Controller
{
    public function exportPdf()
    {
        $pedidos = Pedido::get();
        $pdf   = PDF::loadView('pdf.pedidos', compact('pedidos'));
    	return $pdf->download('pedidos-list.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::orderBy('id', 'DESC')->paginate();
        return view('pedidos.listar', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = Cliente::all();
        $mesa = Mesa::all();
        $trabajador = Trabajador::all();
        // return $cargo;
        return view('pedidos.crear',[
            'clientes' => $cliente,
            'mesas' => $mesa,
            'trabajadores' => $trabajador
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
        $pedidos = new Pedido;
        $pedidos->fecha_pedido = $request->get('fecha_pedido');

        $pedidos->cliente_id = $request->get('id_clien');
        $pedidos->mesa_id = $request->get('id_mes');
        $pedidos->trabajador_id = $request->get('id_traba');
        $pedidos->save();   
        return redirect()->to('pedidos');
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
        $pedidos = Pedido::find($id);
        $cliente = Cliente::all();
        $mesa = Mesa::all();
        $trabajador = Trabajador::all();
        return view('pedidos.editar', compact('pedidos'),[
            'clientes' => $cliente,
            'mesas' => $mesa,
            'trabajadores' => $trabajador
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
        $pedidos = Pedido::find($id);
        $pedidos->nombre = $request->nombre;
        $pedidos->fecha_pedido = $request->fecha_pedido;

        $pedidos->cliente_id = $request->id_clien;
        $pedidos->mesa_id = $request->id_mes;
        $pedidos->trabajador_id = $request->id_traba;

        $pedidos->save();
        return redirect()->to('pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedidos = Pedido::find($id);
        $pedidos->delete();
        return back()->with('info', 'El trabajador fue eliminado');
    }
}
