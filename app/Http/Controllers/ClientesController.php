<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use App\Cliente;

class ClientesController extends Controller
{
    public function exportPdf()
    {
        $clientes = Cliente::get();
        $pdf   = PDF::loadView('pdf.clientes', compact('clientes'));
    	return $pdf->download('clientes-list.pdf');
    }
// use App\http\Requests\
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id','DESC')->paginate();
        return view('clientes.listar', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->nomnbre = $request->get('nomnbre');
        $clientes->ap_paterno = $request->get('ap_paterno');
        $clientes->ci = $request->get('ci');
        $clientes->save();

        return redirect()->to('clientes');
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
        $clientes = Cliente::find($id);
        return view('clientes.editar', compact('clientes'));
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
        $clientes = Cliente::find($id);
        $clientes->nomnbre = $request->nomnbre;
        $clientes->ap_paterno = $request->ap_paterno;
        $clientes->ci = $request->ci;
        $clientes->save();

        return redirect()->to('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Clientes = Cliente::find($id);
        $Clientes->delete();

        return back()->with('info', 'El Clientes fue eliminada');
    }
}
