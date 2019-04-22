<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = ['customer_id', 'bank_id', 'price_total', 'payment_method', 'address', 'province_id', 'district_id', 'content', 'status'];

    public function bank()
    {
        return $this->belongsTo('App\Bank', 'bank_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }

    public function order_detail()
    {
        return $this->hasMany('App\OrderDetail', 'order_id', 'id');
    }

    public static function order_save($request, $id = null)
    {
        $order = Order::find($id);
        if(!isset($order)){
            $order= new Order();
        }
        $order->bank_id = $request->bank_id;
        $order->price_total = $request->price_total;
        $order->payment_method = $request->payment_method;
        $order->address = $request->address;
        $order->province_id = $request->province_id;
        $order->district_id = $request->district_id;
        $order->content = $request->content;
        $order->status = $request->status;
        $result = $order->save();

        return $result ? $order : false;
    }
}
