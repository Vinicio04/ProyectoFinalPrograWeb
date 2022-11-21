<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $slug
 * @property $details
 * @property $price
 * @property $shipping_cost
 * @property $description
 * @property $created_at
 * @property $updated_at
 * @property $category_id
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    use HasFactory;
    static $rules = [
		'name' => 'required',
		'slug' => 'required',
		'price' => 'required',
		'shipping_cost' => 'required',
		'description' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','slug','details','price','shipping_cost','description','category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }


}
