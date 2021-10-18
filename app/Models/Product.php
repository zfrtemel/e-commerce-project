<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
    return $this->belongsToMany(
            Category::class,
            'product_categories',//categorynin altındaki subcategory bu tablodaki sütunları seçerek veriye ulaşıyoruz
            'product_id',//many to many de bu fonksiyonun yazıldığı modelin idsi 
            'category_id');//alt kategorideki ilişki sütunun idsi
    }
   
    public function image()
    {
    return $this->belongsToMany(
            Image::class,
            'product_images',
            'product_id',
            'images_id');
    } 
    public function order()
    {
    return $this->belongsToMany(
            Order::class,
            'product_orders',
            'product_id',
            'order_id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }


    public function product_images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
    public function product_categories()
    {
     
        return $this->hasMany('App\Models\ProductCategory');
    }
   
    public function product_orders()
    {
        return $this->hasMany('App\Models\ProductOrder');
    }
  
}
