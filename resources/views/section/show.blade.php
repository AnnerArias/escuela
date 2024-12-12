@extends('layouts.contenido')

@section('template_title')
    {{ $section->name ?? __('Mostrando la') . " " . __('Sección') }}
@endsection

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando la') }} Sección</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sections.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $section->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Numero Maximo Alumnos:</strong>
                            {{ $section->numero_maximo_alumnos }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Grado:</strong>
                            {{ $section->grade->nombre }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
