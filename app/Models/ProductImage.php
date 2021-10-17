<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function images()
    {
        return $this->belongsTo('App\Models\Image');
    }
    public function productimage()
    {
        return $this->hasOneThrough(Product::class, Image::class);
    }

}
