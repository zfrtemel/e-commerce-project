<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\Cart;
Use App\Models\Product;
Use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   
    public function List(Request $request)
    {
        $user=Auth::User();
        if($user!=null)
        {
            $cartsItem=Cart::where('user_id',$user->id)
                    ->where('quantity','!=',0)
                        ->with('product.image')
                            ->get();

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
        if ($user!=null) {
            $cartSource=Cart::where( 'user_id' , $user->id)->where('product_id' ,$id)->first();
                if ($cartSource!=null) {
                    $cartSource->quantity=$cartSource->quantity+1;
                    $cartSource->save();
                    if ($cartSource) {
                    return view('front.result')->with('durum', 'ürün Eklendi');

                }
            }
            else {
                $cartItem=Cart::create(['product_id' =>$id ,
                'user_id' => $user->id,
                'quantity'=>1]);
                if ($cartItem) 
                {
                    return view('front.result')->with('durum', 'ürün Eklendi');

                }

            }
            
        }
        else {
            $loginError='Bu işlem için giriş yapmanız gerekmektedir';
            return view('auth.login',compact('loginError'));
        }    
    }





    public function quantityUpdate(Request $request)
    {
        $cart = Cart::find($request->id);

        $cart->quantity = $request->quantity;

        $cart->save();
        return response()->Json(['durum'=>'başarılı'],200);
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