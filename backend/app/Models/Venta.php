<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $Codigo
 * @property $CantidadProducto
 * @property $CantidadTotal
 * @property $TotalCosto
 * @property $ImporteRecibido
 * @property $ImporteCambio
 * @property $Activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'Codigo' => 'required',
		'CantidadProducto' => 'required',
		'CantidadTotal' => 'required',
		'TotalCosto' => 'required',
		'ImporteRecibido' => 'required',
		'ImporteCambio' => 'required',
		'Activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Codigo','CantidadProducto','CantidadTotal','TotalCosto','ImporteRecibido','ImporteCambio','Activo'];



}
