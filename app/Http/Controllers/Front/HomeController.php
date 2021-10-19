<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $slider=Slider::orderByDesc('slider_order')->get();

        $product=Product::where('featured',1)
                                ->with('image') 
                                    ->get();
        return view('front.home',compact('slider'),compact('product'));
    }
}
