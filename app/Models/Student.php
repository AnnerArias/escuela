<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $cedula_escolar
 * @property $apellidos
 * @property $nombres
 * @property $sexo
 * @property $fecha_nacimiento
 * @property $lugar_nacimiento
 * @property $edad
 * @property $representante
 * @property $cedula_representante
 * @property $telefono_representante
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Enrollment[] $enrollments
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cedula_escolar', 'apellidos', 'nombres', 'sexo', 'fecha_nacimiento', 'lugar_nacimiento', 'edad', 'representante', 'cedula_representante', 'telefono_representante', 'direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany(\App\Models\Enrollment::class, 'id', 'student_id');
    }
    
}
