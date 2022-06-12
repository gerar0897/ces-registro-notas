<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\AnioEscolar;
use App\Grado;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos =  Alumno::all();
        return view('alumno.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grados =  Grado::all();
        return view('alumno.create', compact('grados'));
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
            $nuevoAlumno = new Alumno;
            $nuevoAlumno->ID_GRADO =  $data['id_grado'];
            $nuevoAlumno->APELLIDO_ALUMNO =  $data['apellido'];
            $nuevoAlumno->NOMBRE_TUTOR =  $data['nombre_tutor'];
            $nuevoAlumno->DUI_TUTOR =  $data['dui_tutor'];
            $nuevoAlumno->DIRECCION_VIVIENDA =  $data['direccion'];
            $nuevoAlumno->CELULAR_TUTOR =  $data['telefono'];
            $nuevoAlumno->FECHA_NACIMIENTO_ALUMNO =  $data['fecha_nacimiento'];
            $nuevoAlumno->NOMBRE_ALUMNO =  $data['nombre'];
            $nuevoAlumno->EDAD_ALUMNO =  $data['edad'];
            $nuevoAlumno->save();
            return redirect()->back()
            ->with('success', 'Agregado Con exito!');
        } catch (\Exception $th) {
            //throw $th;
            dd($th);
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Alumno::find($id);
            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $grados =  Grado::all();

        return view('alumno.edit', compact('alumno', 'grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $alumno = Alumno::find($id);
            $alumno->ID_GRADO =  $data['id_grado'];
            $alumno->APELLIDO_ALUMNO =  $data['apellido'];
            $alumno->NOMBRE_TUTOR =  $data['nombre_tutor'];
            $alumno->DUI_TUTOR =  $data['dui_tutor'];
            $alumno->DIRECCION_VIVIENDA =  $data['direccion'];
            $alumno->CELULAR_TUTOR =  $data['telefono'];
            $alumno->FECHA_NACIMIENTO_ALUMNO =  $data['fecha_nacimiento'];
            $alumno->NOMBRE_ALUMNO =  $data['nombre'];
            $alumno->EDAD_ALUMNO =  $data['edad'];
            $alumno->save();

            return redirect()->back()
                ->with('success', 'Actualizado Con exito!');
        } catch (\Exception $th) {
            //throw $th;

            dd($th);
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_alumno;
        try {
            Alumno::destroy($id);
            return redirect()->back()
                ->with('success', 'Agregado Con exito!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()
                ->with('error', 'Upps, Ocurrio un error!');
        }
    }
}
