@extends('layouts.contenido')

@section('template_title')
    {{ $grade->name ?? __('Mostrando') . " " . __('Grado') }}
@endsection

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando') }} Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('grades.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $grade->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero Maximo Estudiantes:</strong>
                                    {{ $grade->numero_maximo_estudiantes }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
