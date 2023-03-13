<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $id
 * @property $asunto
 * @property $nombre
 * @property $fecha
 * @property $hora
 * @property $cargo
 * @property $celular
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['asunto','nombre','fecha','hora','cargo','celular','estado'];



}
