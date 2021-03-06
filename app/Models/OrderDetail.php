<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = ['order_id', 'product_id', 'product_quantity', 'price_total'];


    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'order_id', 'id');
    }
}
