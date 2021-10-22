<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 
    'billing_Email',
    'billing_name',
    'billing_adress',
    'billing_city',
    'billing_card_number',
    'customer_note',
    'isShiped',
    'billing_total'];

    public function product_orders()
    {
        return $this->hasMany('App\Models\ProductOrder');
    }
  
    public function product()
    {
    return $this->belongsToMany(
            Product::class,
            'product_orders',
            'order_id',
            'product_id');
    }
    

}
