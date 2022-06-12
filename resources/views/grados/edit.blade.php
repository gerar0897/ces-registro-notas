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
                    <form method="POST" action="{{route('grado.update', $grado->ID_GRADO)}}" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <label for="id_ano">Periodo Escolar</label>
                        <select id="id_ano" name="id_ano" class="form-control" required>
                            @foreach ($lista_anio_escolar as $item)
                                <option value="{{ $item->ID_ANO }}" @if ($item->ID_GRADO === $grado->ID_GRADO )
                                    selected
                                @endif >Comienza:{{ $item->FECHA_INICIO }} -
                                    Termina:
                                    {{ $item->FECHA_FIN }} </option>
                            @endforeach
                        </select>
                        <div class="my-4">
                            <div class="row">
                                <div class="col">
                                    <label for="nombre_grado">Nombre del Grado</label>
                                    <input id="nombre_grado" name="nombre_grado" value="{{$grado->NOMBRE_GRADO}}" type="text" class="form-control" placeholder="Nombre" required >
                                </div>
                                <div class="col">
                                    <label for="seccion">Nombre del Seccion</label>
                                    <input id="seccion" name="seccion" type="text" value="{{$grado->SECCION}}" class="form-control" placeholder="Seccion" required >
                                </div>
                            </div>
                        </div>

                        <div class=" row justify-content-center">
                            <a type="button" href="{{route('grado.index')}}" class="btn btn-secondary mr-4">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Actualizar Grado</button>

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
