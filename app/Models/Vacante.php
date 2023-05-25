<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'Salario',
        'carrera_id',
        'empresa',
        'descripcion',
        'imagen',
        'user_id',

    ];

    public function carrera()
    {


            return $this->belongsTo(Carrera::class);

    }
/**
 * Get all of the comments for the Vacante
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function candidatos()
{
    return $this->hasMany(Candidato::class);
}

}
