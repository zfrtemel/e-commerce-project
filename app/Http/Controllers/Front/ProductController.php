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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }

 

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
       
 return view('front.shop.product-list',compact('product'),compact('category'));
    
    }
    

   
    public function productDetails($slug)
    {
        
        $product = Product::where('slug',$slug)->with('image')->simplePaginate(2)->firstOrFail();
        $category=Category::where('slug',$slug)->get();
      

    return view('front.shop.product-single',compact('product'),compact('category'));
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
