<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $Icono
 * @property $Activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menu extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Icono' => 'required',
		'Activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Icono','Activo'];



}
