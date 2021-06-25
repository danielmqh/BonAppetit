<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plato;
use App\Tipo_plato;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::orderBy('id', 'DESC')->paginate();
        return view('platos.listar', compact('platos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_plato = Tipo_plato::all();
        return view('platos.crear',[
            'tipo_platos' => $tipo_plato
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
        $platos = new Plato;
        $platos->nombre_plato = $request->get('nombre_plato');
        $platos->precio_plato = $request->get('precio_plato');

        $platos->tipo_plato_id = $request->get('id_plato');
        $platos->save();
        // return $request->all();
        return redirect()->to('platos');
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
        $platos = Plato::find($id);
        $tipo_plato = Tipo_plato::all();

        return view('platos.editar', compact('platos'),[
            'tipo_platos' => $tipo_plato
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
        $platos = Plato::find($id);
        $platos->nombre_plato = $request->nombre_plato;
        $platos->precio_plato = $request->precio_plato;

        $platos->Tipo_plato_id = $request->id_tiplato;
        // return $request->all();
        $platos->save();
        return redirect()->to('platos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $platos = Plato::find($id);
        $platos->delete();
        return back()->with('info', 'El plato fue eliminado');
    }
}
