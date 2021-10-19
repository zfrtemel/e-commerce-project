<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
class ProductController extends Controller
{
    

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AllProductList()
    {
        
        $product=Product::with('category','image')->simplePaginate(2);
        $category=Category::all();
        return view('front.shop.product-list',compact('product'),compact('category'));
    
    }
    public function categoryProductList($id)
    {
        
        $categoryProduct = Category::where('id',$id)->firstOrFail();
        $product=$categoryProduct->product()->simplePaginate(1);
      
        $category=Category::where('id',$id)->get();
        $categoryName= $category->first();
        return view('front.shop.product-list',compact('product'),compact('category'),compact('categoryName'));
    
    }
    

   
    public function productDetails($slug)
    {
        
        $product = Product::where('slug',$slug)->with('image','category')->simplePaginate(2)->firstOrFail();
        $category=Category::where('slug',$slug)->get();
      $releated=Category::where('id',$product->category->first()->id)->with('product.image')->firstOrFail();
   return view('front.shop.product-single',compact('product'),compact('category'))->with('releated',$releated->product);
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
