<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $Direccion
 * @property $Telefono
 * @property $email
 * @property $Activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Direccion' => 'required',
		'Telefono' => 'required',
		'email' => 'required',
		'Activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Direccion','Telefono','email','Activo'];



}
