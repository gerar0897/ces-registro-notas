@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('GESTION DE GRADOS') }}</div>

                    <div class="card-body text-center">
                        {{ __('Pantalla para administrar los registro de grados') }}
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <a type="button" href="{{route('grado.create')}}" class="btn btn-primary">Agregar Grado</a>
                </div>
                <div class="mt-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Seccion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grados as $g)
                                <tr>
                                    <th scope="row">{{ $g->ID_GRADO }}</th>
                                    <td>{{ $g->NOMBRE_GRADO }}</td>
                                    <td>{{ $g->SECCION }}</td>
                                    <td>
                                        <a type="button" href="{{route('grado.edit', $g->ID_GRADO)}}" class="mr-2 btn btn-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tooltip on top">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        @include('grados.delete-modal')
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