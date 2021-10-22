<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = ['product_id','order_id'];

    use HasFactory;


    public function productorder()
    {
        return $this->hasOneThrough(Product::class, Order::class);
    }



    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function orders()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
