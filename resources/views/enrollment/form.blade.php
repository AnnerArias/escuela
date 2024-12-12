<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="cedula_escolar" class="form-label">{{ __('Cédula del Estudiante') }}</label>
            <input type="text" name="cedula_escolar" class="form-control @error('cedula_escolar') is-invalid @enderror" value="{{ old('cedula_escolar', $enrollment->student->cedula_escolar ?? '') }}" id="cedula_escolar" placeholder="Cédula del Estudiante">
            {!! $errors->first('cedula_escolar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombre del Estudiante') }}</label>
            <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombre del Estudiante" readonly>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellido del Estudiante') }}</label>
            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellido del Estudiante" readonly>
        </div>
        <input type="hidden" name="student_id" id="student_id">
        <div class="form-group mb-2 mb20">
            <label for="grade_id" class="form-label">{{ __('Grado') }}</label>
            <select name="grade_id" class="form-control @error('grade_id') is-invalid @enderror" id="grade_id">
                @foreach($grades as $grade)
                    <option value="{{ $grade->id }}" {{ old('grade_id', $enrollment->section->grade_id ?? '') == $grade->id ? 'selected' : '' }}>{{ $grade->nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('grade_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="section_id" class="form-label">{{ __('Sección') }}</label>
            <select name="section_id" class="form-control @error('section_id') is-invalid @enderror" id="section_id">
                <!-- Options will be loaded via AJAX -->
            </select>
            {!! $errors->first('section_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ano_academico" class="form-label">{{ __('Año Académico') }}</label>
            <input type="text" name="ano_academico" class="form-control @error('ano_academico') is-invalid @enderror" value="{{ old('ano_academico', $enrollment->ano_academico ?? '') }}" id="ano_academico" placeholder="Año Académico">
            {!! $errors->first('ano_academico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Continuar') }}</button>
    </div>
</div>
<script>
    document.getElementById('cedula_escolar').addEventListener('input', function() {
        let cedula = this.value;
        if (cedula.length >= 7) {
            fetch(`/enrollments/search-by-cedula?cedula=${cedula}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        document.getElementById('nombres').value = '';
                        document.getElementById('apellidos').value = '';
                        document.getElementById('student_id').value = '';
                        alert('Student not found');
                    } else {
                        document.getElementById('nombres').value = data.nombres;
                        document.getElementById('apellidos').value = data.apellidos;
                        document.getElementById('student_id').value = data.id;
                    }
                })
                .catch(error => console.error('Error:', error));
        } else {
            document.getElementById('nombres').value = '';
            document.getElementById('apellidos').value = '';
            document.getElementById('student_id').value = '';
        }
    });

    document.getElementById('grade_id').addEventListener('change', function() {
        let grade_id = this.value;
        fetch(`/enrollments/get-sections-by-grade?grade_id=${grade_id}`)
            .then(response => response.json())
            .then(data => {
                let sectionSelect = document.getElementById('section_id');
                sectionSelect.innerHTML = '';
                data.forEach(section => {
                    let option = document.createElement('option');
                    option.value = section.id;
                    option.text = section.nombre;
                    sectionSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));
    });
</script>
