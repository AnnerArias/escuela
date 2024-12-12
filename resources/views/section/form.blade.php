<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $section?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numero_maximo_alumnos" class="form-label">{{ __('Numero Maximo Alumnos') }}</label>
            <input type="number" name="numero_maximo_alumnos" class="form-control @error('numero_maximo_alumnos') is-invalid @enderror" value="{{ old('numero_maximo_alumnos', $section?->numero_maximo_alumnos) }}" id="numero_maximo_alumnos" placeholder="Numero Maximo Alumnos">
            {!! $errors->first('numero_maximo_alumnos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grade_id" class="form-label">{{ __('Grado') }}</label>
            <select name="grade_id" class="form-control @error('grade_id') is-invalid @enderror" id="grade_id">
                <option value="">{{ __('Seleccione un grado') }}</option>
                @foreach($grades as $grade)
                    <option value="{{ $grade->id }}" {{ old('grade_id', $section?->grade_id) == $grade->id ? 'selected' : '' }}>{{ $grade->nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('grade_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Continuar') }}</button>
    </div>
</div>
