<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cedula_escolar" class="form-label">{{ __('Cedula Escolar') }}</label>
            <input type="text" name="cedula_escolar" class="form-control @error('cedula_escolar') is-invalid @enderror" value="{{ old('cedula_escolar', $student?->cedula_escolar) }}" id="cedula_escolar" placeholder="Cedula Escolar" pattern="[A-Z][0-9]+">
            {!! $errors->first('cedula_escolar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos', $student?->apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
            <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres', $student?->nombres) }}" id="nombres" placeholder="Nombres">
            {!! $errors->first('nombres', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <select name="sexo" class="form-control @error('sexo') is-invalid @enderror" id="sexo">
                <option value="F" {{ old('sexo', $student?->sexo) == 'F' ? 'selected' : '' }}>F</option>
                <option value="M" {{ old('sexo', $student?->sexo) == 'M' ? 'selected' : '' }}>M</option>
            </select>
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $student?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_nacimiento" class="form-label">{{ __('Lugar Nacimiento') }}</label>
            <textarea name="lugar_nacimiento" class="form-control @error('lugar_nacimiento') is-invalid @enderror" id="lugar_nacimiento" placeholder="Lugar Nacimiento">{{ old('lugar_nacimiento', $student?->lugar_nacimiento) }}</textarea>
            {!! $errors->first('lugar_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20" style="display: none;">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="1" id="edad" placeholder="Edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="representante" class="form-label">{{ __('Representante') }}</label>
            <input type="text" name="representante" class="form-control @error('representante') is-invalid @enderror" value="{{ old('representante', $student?->representante) }}" id="representante" placeholder="Representante">
            {!! $errors->first('representante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cedula_representante" class="form-label">{{ __('Cedula Representante') }}</label>
            <input type="text" name="cedula_representante" class="form-control @error('cedula_representante') is-invalid @enderror" value="{{ old('cedula_representante', $student?->cedula_representante) }}" id="cedula_representante" placeholder="Cedula Representante" pattern="[A-Z][0-9]+">
            {!! $errors->first('cedula_representante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_representante" class="form-label">{{ __('Telefono Representante') }}</label>
            <input type="tel" name="telefono_representante" class="form-control @error('telefono_representante') is-invalid @enderror" value="{{ old('telefono_representante', $student?->telefono_representante) }}" id="telefono_representante" placeholder="Telefono Representante">
            {!! $errors->first('telefono_representante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <textarea name="direccion" class="form-control @error('direccion') is-invalid @enderror" id="direccion" placeholder="Direccion">{{ old('direccion', $student?->direccion) }}</textarea>
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Continuar') }}</button>
    </div>
</div>
