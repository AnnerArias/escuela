@extends('layouts.contenido')

@section('template_title')
    {{ __('Nueva') }} Inscripción
@endsection

@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Nueva') }} Inscripción</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('enrollments.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('enrollment.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
