<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
class ProductController extends Controller
{
    public function AllProductList()
    {
        
        $product=Product::with('category','image')->simplePaginate(6);
        $category=Category::all();
        return view('front.shop.product-list',compact('product'),compact('category'));
    
    }
    public function categoryProductList($id)
    {
        
        $categoryProduct = Category::where('id',$id)->firstOrFail();
        $product=$categoryProduct->product()->simplePaginate(6);
      
        $category=Category::where('id',$id)->get();
        $categoryName= $category->first();
        return view('front.shop.product-list',compact('product'),compact('category'),compact('categoryName'));
    
    }
    

   
    public function productDetails($slug)
    {
        
        $product = Product::where('slug',$slug)->with('image','category')->firstOrFail();
        $category=Category::where('slug',$slug)->get();
      $releated=Category::where('id',$product->category->first()->id)->with('product.image')->firstOrFail();
   return view('front.shop.product-single',compact('product'),compact('category'))->with('releated',$releated->product);
    }

  

}
