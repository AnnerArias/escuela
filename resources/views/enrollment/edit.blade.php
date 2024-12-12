@extends('layouts.contenido')

@section('template_title')
    {{ __('Actualizar') }} Inscripción
@endsection

@section('content')
    <section class="container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Inscripción</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('enrollments.update', $enrollment->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('enrollment.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
