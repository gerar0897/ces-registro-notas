@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">{{ __('GESTION DE GRADOS') }}</div>

                    <div class="card-body text-center">
                        {{ __('Pantalla para administrar los registro de grados') }}
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <a type="button" href="{{route('alumnos.create')}}" class="btn btn-primary">Agregar Grado</a>
                </div>
                <div class="mt-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Tutor</th>
                                <th scope="col">Dui Tutor</th>
                                <th scope="col">Telefono Tutor</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnos as $a)
                                <tr>
                                    <th scope="row">{{ $a->ID_ALUMNO }}</th>
                                    <td>{{ $a->NOMBRE_ALUMNO }}</td>
                                    <td>{{ $a->APELLIDO_ALUMNO }}</td>
                                    <td>{{ $a->DIRECCION_VIVIENDA }}</td>
                                    <td>{{ $a->NOMBRE_TUTOR }}</td>
                                    <td>{{ $a->DUI_TUTOR }}</td>
                                    <td>{{ $a->CELULAR_TUTOR }}</td>
                                    <td>{{ $a->EDAD_ALUMNO }}</td>
                                    <td>
                                        <a type="button" href="{{route('alumnos.edit', $a->ID_ALUMNO)}}" class="mr-2 btn btn-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tooltip on top">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        @include('alumno.delete-modal')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
@endsection