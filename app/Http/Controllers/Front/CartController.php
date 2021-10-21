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
        $cartItem=Cart::create(['product_id' =>$id ,
                                                'user_id' => $user->id,
                                                                'quantity'=>1]);
        if ($cartItem) {
            return back()->with('durum', 'ürün Eklendi');

        }
    }
    public function quantityUpdate(Request $request)
    {



        $cart = Cart::find($request->id);

        $cart->quantity = $request->quantity;

        $cart->save();
        return response()->Json(['durum'=>'başarılı'],200);
    }

 
    public function checkout()
    {
        $user=Auth::User();
        $cartsItem=Cart::where('user_id',$user->id)
                    ->where('quantity','!=',0)
                        ->with('product.image')
                            ->get();
        return view('front.cart.order',compact('cartsItem')); 
    }
    public function checkoutAdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,10'
        ]);

        //return view('front.cart.order',compact('cartsItem')); 
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