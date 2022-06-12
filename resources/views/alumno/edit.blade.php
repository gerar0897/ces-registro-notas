@extends('layouts.app')

@section('headers')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('GESTION DE ALUMNOS') }}</div>

                    <div class="card-body text-center">
                        {{ __('Pantalla para crear nuevo registro de alumnos') }}
                    </div>
                </div>

                <div class="my-4">
                    <form method="POST" action="{{route('alumnos.update', $alumno->ID_ALUMNO)}}" autocomplete="off">
                        @csrf
                        @method('PUT')

                        <label for="grado">Grado</label>
                        <select id="id_grado" name="id_grado" class="form-control" required>
                            <option selected>Seleccione...</option>
                            @foreach ($grados as $item)
                                <option value="{{ $item->ID_GRADO }}" @if ($item->ID_GRADO === $alumno->ID_GRADO ) selected
                                @endif >{{ $item->NOMBRE_GRADO }} -
                                    {{ $item->SECCION }} </option>
                            @endforeach
                        </select>
                        <small id="gradoHelp" class="form-text text-muted">Grado del alumno.</small>

                        <div class="my-4">
                            <div class="row">
                                <div class="col">
                                    <label for="nombre">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$alumno->NOMBRE_ALUMNO}}"
                                        placeholder="Nombre" required>
                                    <small id="nombreHelp" class="form-text text-muted">Nombres del alumno.</small>

                                </div>
                                <div class="col">
                                    <label for="apellido">Apellido</label>
                                    <input id="apellido" name="apellido" type="text" class="form-control"  value="{{$alumno->APELLIDO_ALUMNO}}"
                                        placeholder="Apellido" required>
                                    <small id="apellidosHelp" class="form-text text-muted">Apellidos del alumno.</small>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre_tutor">Nombre Completo Tutor</label>
                                <input type="text" class="form-control" id="nombre_tutor" name="nombre_tutor"  value="{{$alumno->NOMBRE_TUTOR}}"
                                    aria-describedby="tutorHelp" placeholder="Tutor">
                                <small id="tutorHelp" class="form-text text-muted">Nombres y Apellidos del tutor.</small>
                            </div>
                            <div class="form-group">
                                <label for="dui_tutor">Nombre Completo Tutor</label>
                                <input type="text" class="form-control" id="dui_tutor" name="dui_tutor"  value="{{$alumno->DUI_TUTOR}}"
                                    aria-describedby="duiTutorHelp" placeholder="DUI - Tutor">
                                <small id="duiTutorHelp" class="form-text text-muted">DUI del tutor.</small>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono de Contacto</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"  value="{{$alumno->CELULAR_TUTOR}}"
                                    aria-describedby="telefonoHelp" placeholder="Telefono">
                                <small id="telefonoHelp" class="form-text text-muted">Telefono.</small>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <textarea class="form-control" id="direccion" name="direccion" rows="5">{{$alumno->DIRECCION_VIVIENDA}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="fecha_inicio">Fecha de Nacimiento del Alumno</label>
                                <input type="text" class="form-control datepickers" id="fecha_nacimiento"  value="{{$alumno->FECHA_NACIMIENTO_ALUMNO}}"
                                    name="fecha_nacimiento" aria-describedby="fechaInicioHelp" placeholder="dd/mm/yyyy">
                                <small id="fechaNacimientoHelp" class="form-text text-muted">Fecha de Nacimiento.</small>
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input type="text" class="form-control" id="edad" name="edad" aria-describedby="edadHelp"
                                    placeholder="Edad del Alumno" value="{{$alumno->EDAD_ALUMNO}}">
                                <small id="edadHelp" class="form-text text-muted">Edad del alumno.</small>
                            </div>
                        </div>
                        <div class=" row justify-content-center">
                            <button type="submit" class="btn btn-primary">Registrar Alumno</button>
                            <a type="button" href="{{ route('alumnos.index') }}"
                                class="btn btn-secondary ml-4">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
    <script type="text/javascript">
        $(".datepickers").flatpickr({
            "locale": "es"
        });
    </script>
@endsection
