<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

use App\Proveedor;
use App\http\Requests\ProveedoresRequest;

class ProveedoresController extends Controller
{
    public function exportPdf()
    {
        $proveedores = Proveedor::get();
        $pdf   = PDF::loadView('pdf.proveedores', compact('proveedores'));
    	return $pdf->download('proveedores-list.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::orderBy('id','DESC')->paginate();
        return view('proveedores.listar', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedores = new Proveedor;
        $proveedores->nombre_proveedor = $request->get('nombre_proveedor');
        $proveedores->direccion_proveedor = $request->get('direccion_proveedor');
        $proveedores->telefono_proveedor = $request->get('telefono_proveedor');
        $proveedores->email_proveedor = $request->get('email_proveedor');
        $proveedores->save();
        // return 'hola';
        // return $request->all();
        return redirect()->to('proveedores');
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
        $proveedores = Proveedor::find($id);
        return view('proveedores.editar', compact('proveedores'));
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
        $proveedores = Proveedor::find($id);
        $proveedores->nombre_proveedor = $request->get('nombre_proveedor');
        $proveedores->direccion_proveedor = $request->get('direccion_proveedor');
        $proveedores->telefono_proveedor = $request->get('telefono_proveedor');
        $proveedores->email_proveedor = $request->get('email_proveedor');
        $proveedores->save();
        // return 'hola';
        return redirect()->to('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores = Proveedor::find($id);
        $proveedores->delete();

        return back()->with('info', 'El proveedor fue eliminado');
    }
}
