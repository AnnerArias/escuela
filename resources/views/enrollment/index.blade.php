@extends('layouts.contenido')

@section('template_title')
    Estudiantes inscritos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Enrollments') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('enrollments.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __('Agregar nueva') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Grado</th>
                                        <th>Cantidad de Alumnos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $grade => $students)
                                        <tr>
                                            <td>{{ $grade }}</td>
                                            <td>{{ count($students) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
