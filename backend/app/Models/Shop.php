<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Shop
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $RUC
 * @property $Direccion
 * @property $Telefono
 * @property $Activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Shop extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'RUC' => 'required',
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
    protected $fillable = ['Nombre','RUC','Direccion','Telefono','Activo'];



}
