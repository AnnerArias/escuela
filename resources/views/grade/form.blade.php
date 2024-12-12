<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $grade?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numero_maximo_estudiantes" class="form-label">{{ __('Numero Maximo Estudiantes') }}</label>
            <input type="number" name="numero_maximo_estudiantes" class="form-control @error('numero_maximo_estudiantes') is-invalid @enderror" value="{{ old('numero_maximo_estudiantes', $grade?->numero_maximo_estudiantes) }}" id="numero_maximo_estudiantes" placeholder="Numero Maximo Estudiantes">
            {!! $errors->first('numero_maximo_estudiantes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Continuar') }}</button>
    </div>
</div>