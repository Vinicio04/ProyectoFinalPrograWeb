<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $TipoDocumento
 * @property $NumeroDocumento
 * @property $Direccion
 * @property $Telefono
 * @property $Activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'TipoDocumento' => 'required',
		'NumeroDocumento' => 'required',
		'Direccion' => 'required',
		'Telefono' => 'required',
		'Activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','TipoDocumento','NumeroDocumento','Direccion','Telefono','Activo'];



}
