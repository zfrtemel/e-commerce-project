<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function product_images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
    public function page()
    {
        return $this->belongsTo(Page::class,'page_image_id');
    }
}
