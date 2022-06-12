<?php

namespace App\Http\Controllers;

use App\AnioEscolar;
use Illuminate\Http\Request;

class AnioEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolar =  AnioEscolar::all();
        return view('anio-escolar.index', ['escolar' => $escolar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anio-escolar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $nuevoAnioEscolar = new AnioEscolar;
            $nuevoAnioEscolar->FECHA_INICIO =  $data['fecha_inicio'];
            $nuevoAnioEscolar->FECHA_FIN =  $data['fecha_fin'];
            $nuevoAnioEscolar->save();
            return redirect()->back()
                ->with('success', 'Agregado Con exito!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = AnioEscolar::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anioEscolar =  AnioEscolar::find($id);
        return view('anio-escolar.edit', ['anioEscolar' => $anioEscolar]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $anioEscolar = AnioEscolar::find($id);
            $anioEscolar->FECHA_INICIO = $data['fecha_inicio'];
            $anioEscolar->FECHA_FIN = $data['fecha_fin'];
            $anioEscolar->save();

            return redirect()->back()
                ->with('success', 'Actualizado Con exito!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnioEscolar  $anioEscolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->escolar;
        try {
            AnioEscolar::destroy($id);
            return redirect()->back()
                ->with('success', 'Eliminado Con exito!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()
                ->with('error', 'No se puede borrar el registro, Esta siendo ocupado en algun registro!');
        }
    }
}
