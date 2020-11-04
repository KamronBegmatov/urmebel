<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder create(array $attributes = [])
 * @method static Builder pluck($column) Get a single column's value from the first result of a query.
 * @method public Builder update(array $values)
 * @property mixed id
 */

class Product extends Model
{
    use HasFactory;
    //protected $guarded =[];
    protected $fillable = ['name', 'price', 'material', 'category_id', 'description', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6',];
}
