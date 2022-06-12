<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesor =  Profesor::all();
        return $profesor;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $nuevoProfesor = new Profesor;
        $nuevoProfesor->ID_USUARIO =  $data['id_usuario'];
        $nuevoProfesor->NOMBRE_PROFESOR =  $data['nombre_profesor'];
        $nuevoProfesor->APELLIDO_PROFESOR =  $data['apellido_profesor'];
        $nuevoProfesor->DUI =  $data['dui'];
        $nuevoProfesor->DIRECCION_PROFESOR =  $data['direccion_profesor'];
        $nuevoProfesor->CELULAR_PROFESOR =  $data['celular_profesor'];
        $nuevoProfesor->ESPECIALIZACION =  $data['especializacion'];
        $nuevoProfesor->save();
        return $nuevoProfesor;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Profesor::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $profesor = Profesor::find($id);
            $profesor->ID_USUARIO =  $data['id_usuario'];
            $profesor->NOMBRE_PROFESOR =  $data['nombre_profesor'];
            $profesor->APELLIDO_PROFESOR =  $data['apellido_profesor'];
            $profesor->DUI =  $data['dui'];
            $profesor->DIRECCION_PROFESOR =  $data['direccion_profesor'];
            $profesor->CELULAR_PROFESOR =  $data['celular_profesor'];
            $profesor->ESPECIALIZACION =  $data['especializacion'];
            $profesor->save();

            return $profesor;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Profesor::destroy($id);
            return 'Profesor ELIMINADO';
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }
}
