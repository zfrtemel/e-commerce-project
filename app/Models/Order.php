<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function product_orders()
    {
        return $this->hasMany('App\Models\ProductOrder');
    }
}
