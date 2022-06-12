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
                    <div class="card-header text-center">{{ __('GESTION DE GRADOS') }}</div>

                    <div class="card-body text-center">
                        {{ __('Pantalla para crear nuevo registro de grados') }}
                    </div>
                </div>

                <div class="my-4">
                    <form method="POST" action="/anio-escolar">
                        @csrf
                        <div class="form-group">
                            <label for="fecha_inicio">Fecha de inicio de periodo escolar</label>
                            <input type="text" class="form-control datepickers" id="fecha_inicio" name="fecha_inicio"
                                aria-describedby="fechaInicioHelp" placeholder="dd/mm/yyyy">
                            <small id="fechaInicioHelp" class="form-text text-muted">Fecha de inicio.</small>
                        </div>

                        <div class="form-group">
                            <label for="fecha_fin">Fecha de finalizacion de periodo escolar</label>
                            <input type="text" class="form-control datepickers" id="fecha_fin" name="fecha_fin"
                                aria-describedby="fechaFinHelp" placeholder="dd/mm/yyyy">
                            <small id="fechaFinHelp" class="form-text text-muted">Fecha de finalizacion.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Nuevo Año Escolar</button>
                        <a type="button" href="{{route('anio-escolar.index')}}" class="btn btn-secondary mr-4">Cancelar</a>

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
