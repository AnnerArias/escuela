<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 *
 * @property $id
 * @property $nombre
 * @property $numero_maximo_estudiantes
 * @property $created_at
 * @property $updated_at
 *
 * @property Section[] $sections
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grade extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'numero_maximo_estudiantes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany(\App\Models\Section::class, 'id', 'grade_id');
    }
    
}
