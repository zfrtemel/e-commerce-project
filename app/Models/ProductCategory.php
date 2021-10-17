<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    public function productcategory()
    {
        return $this->hasOneThrough(Product::class, Category::class);
    }

    
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }
    // public function product_categories($itemid)
    // {
    //     return $this->hasMany('App\ProductCategory','id','id')->where('product_categories.id',$itemid);
    // }
}
