<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 	protected $table = 'product';
	public function brand()
    {
        return $this->belongsTo('App\Models\Category', 'brand_id', 'id');
    }
    public function category()
    {
        return $this->belongsToMany('App\Models\Category', 'product_category', 'product_id', 'category_id');
    }
}
