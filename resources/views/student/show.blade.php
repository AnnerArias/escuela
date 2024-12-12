@extends('layouts.contenido')

@section('template_title')
    {{ $student->name ?? __('Mostrando el') . " " . __('Estudiante') }}
@endsection

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrando el') }} Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('students.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Cedula Escolar:</strong>
                                    {{ $student->cedula_escolar }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $student->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombres:</strong>
                                    {{ $student->nombres }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $student->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $student->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar Nacimiento:</strong>
                                    {{ $student->lugar_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $student->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Representante:</strong>
                                    {{ $student->representante }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cedula Representante:</strong>
                                    {{ $student->cedula_representante }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono Representante:</strong>
                                    {{ $student->telefono_representante }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $student->direccion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
