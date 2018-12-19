<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = [
        'order_id', 'name', 'price', 'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
