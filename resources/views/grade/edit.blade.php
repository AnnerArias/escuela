@extends('layouts.contenido')

@section('template_title')
    {{ __('Actualizar') }} Grado
@endsection

@section('content')
    <section class="container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Actualizar') }} Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('grades.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('grades.update', $grade->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('grade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
