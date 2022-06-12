<?php

namespace App\Http\Controllers;

use App\AnioEscolar;
use App\Grado;
use Exception;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grado =  Grado::all();
        return view('grados.index', ['grados' => $grado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anioEscolar =  AnioEscolar::all();

        return view('grados.create', ['lista_anio_escolar' => $anioEscolar]);
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
            $nuevoGrado = new Grado;
            $nuevoGrado->ID_ANO =  $data['id_ano'];
            $nuevoGrado->NOMBRE_GRADO =  $data['nombre_grado'];
            $nuevoGrado->SECCION =  $data['seccion'];
            $nuevoGrado->save();
            return redirect()->back()
                ->with('success', 'Agregado Con exito!');
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Grado::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        
        $data = Grado::find($id);
        $anioEscolar =  AnioEscolar::all();


        return view('grados.edit', ['grado' => $data, 'lista_anio_escolar' => $anioEscolar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $grado = Grado::find($id);
            $grado->ID_ANO =  $data['id_ano'];
            $grado->NOMBRE_GRADO =  $data['nombre_grado'];
            $grado->SECCION =  $data['seccion'];
            $grado->save();

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
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_grado;
        try {
            Grado::destroy($id);
            return redirect()->back()
                ->with('success', 'Eliminado Con exito!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()
                ->with('error', 'No se puede borrar el grado, esta siendo utilizado en algun registro!');
        }
    }
}
