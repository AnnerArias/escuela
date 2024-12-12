@extends('layouts.contenido')

@section('template_title')
    {{ $enrollment->name ?? __('Show') . " " . __('Enrollment') }}
@endsection

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Enrollment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('enrollments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Student Id:</strong>
                                    {{ $student->cedula_escolar }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Section Id:</strong>
                                    {{ $enrollment->section_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ano Academico:</strong>
                                    {{ $enrollment->ano_academico }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
