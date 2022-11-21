<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleventa
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $Cantidad
 * @property $PrecioUnidad
 * @property $ImporteTotal
 * @property $Activo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalleventa extends Model
{
    
    static $rules = [
		'Cantidad' => 'required',
		'PrecioUnidad' => 'required',
		'ImporteTotal' => 'required',
		'Activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cantidad','PrecioUnidad','ImporteTotal','Activo'];



}
