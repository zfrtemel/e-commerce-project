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
        
        $product=Product::with('category','image')->get();
        $category=Category::all();
        return view('front.shop.product-list',compact('product'),compact('category'));
    
    }
    public function categoryProductList($id)
    {
        
        // $product=Product::find($id);
        $product = Category::find($id)->product;
        $category=Category::where('id',$id)->get();
   return view('front.shop.product-list',compact('product'),compact('category'));
    
    }

   
    public function productDetails($id)
    {
        //
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
