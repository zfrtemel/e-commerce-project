<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\Cart;
Use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function List(Request $request)
    {
        $user=Auth::User();
     if($user!=null){
        $cartsItem=Cart::where('user_id',$user->id)->with('product.image')->get();
    
         return view('front.cart.cart',compact('cartsItem'));
     }
     else 
     {
         $loginError='Bu işlem için giriş yapmanız gerekmektedir';
         return view('auth.login',compact('loginError'));
     }


    }
 
   
    public function CartAdd($id)
    {
        $user=Auth::User();
    $cartItem=   Cart::create(['product_id' =>1 ,
    'user_id' => 1,
    'quantity'=>1]
);
if ($cartItem) {
    return back()->with('durum', 'ürün Eklendi');

}
    }

 
    public function store(Request $request)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
      Cart::where('id',$id)->delete();
      return back()->with('durum', 'product deleted');
    }
}