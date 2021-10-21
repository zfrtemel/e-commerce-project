<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Page;
use App\Models\Image;


class HomeController extends Controller
{
    public function index()
    {
        $slider=Slider::orderByDesc('slider_order')->get();

        $product=Product::where('featured',1)
                                ->with('image') 
                                    ->take(12)->get();
        return view('front.home',compact('slider'),compact('product'));
    }
    public function custom($slug)
    {
        $pages=Page::where('slug',$slug)->firstOrFail();
$image=Image::where('id',$pages->id)->firstOrFail();
     
       return view('front.custom',compact('pages'),compact('image'));
    }
}
