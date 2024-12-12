<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Section
 *
 * @property $id
 * @property $nombre
 * @property $numero_maximo_alumnos
 * @property $grade_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Grade $grade
 * @property Enrollment[] $enrollments
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Section extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'numero_maximo_alumnos', 'grade_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grade()
    {
        return $this->belongsTo(\App\Models\Grade::class, 'grade_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany(\App\Models\Enrollment::class, 'id', 'section_id');
    }
    
}
