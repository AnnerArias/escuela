<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enrollment
 *
 * @property $id
 * @property $student_id
 * @property $section_id
 * @property $ano_academico
 * @property $created_at
 * @property $updated_at
 *
 * @property Section $section
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Enrollment extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['student_id', 'section_id', 'ano_academico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo(\App\Models\Section::class, 'section_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'student_id', 'id');
    }
    
}
