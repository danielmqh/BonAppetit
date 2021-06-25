<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebida;
use App\Tipo_bebida;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bebidas = Bebida::orderBy('id', 'DESC')->paginate();
        return view('bebidas.listar', compact('bebidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_bebida = Tipo_bebida::all();
        return view('bebidas.crear',[
            'tipo_bebidas' => $tipo_bebida
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
        $bebidas = new Bebida;
        $bebidas->nombre_bebida = $request->get('nombre_bebida');
        $bebidas->precio_bebida = $request->get('precio_bebida');

        $bebidas->tipo_bebida_id = $request->get('id_bebi');
        $bebidas->save();

        return redirect()->to('bebidas');

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
        $bebidas = Bebida::find($id);
        $tipo_bebida = Tipo_bebida::all();

        return view('bebidas.editar', compact('bebidas'),[
            'tipo_bebidas' => $tipo_bebida
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
        $bebidas = Bebida::find($id);
        $bebidas->nombre_bebida = $request->nombre_bebida;
        
        $bebidas->precio_bebida = $request->precio_bebida;

        $bebidas->tipo_bebidas_id = $request->id_bebi;
        // return $request->all();
        $bebidas->save();
        return redirect()->to('bebidas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bebidas = Bebida::find($id);
        $bebidas->delete();
        return back()->with('info', 'La bebida fue eliminada');
    }
}
