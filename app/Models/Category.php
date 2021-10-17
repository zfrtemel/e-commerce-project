<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function product_categories()
    {
        return $this->hasMany('App\Models\ProductCategory');
    }
  

    public function product()
    {
    return $this->belongsToMany(
            Product::class,
            'product_categories',
            'category_id',
            'product_id');
    }
}
