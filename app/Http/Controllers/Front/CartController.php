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
                return back()->with('durum', 'ürün Eklendi');

            }
            }
            else {
                $cartItem=Cart::create(['product_id' =>$id ,
            'user_id' => $user->id,
            'quantity'=>1]);
            if ($cartItem) {
                return back()->with('durum', 'ürün Eklendi');

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
        $user=Auth::User();
        $cartsItem=Cart::where('user_id',$user->id)
                    ->where('quantity','!=',0)
                        ->with('product.image')
                            ->get();


          $orderItem=Order::create(
              
          ['user_id' => $user->id,
          'billing_Email'=>$request->billing_Email,
          'isShiped'=>0,
          'billing_name'=>$user->name,
          'billing_adress'=>$request->billing_adress,
          'billing_city'=>$request->billing_city,
          'billing_card_number'=>$request->billing_card_number,
          'customer_note'=>$request->customer_note,
          'billing_total'=>150]
        );

            if ($orderItem) {
        //         $orderCart=Cart::create(
        //       [

        //   ]);
             dd('başarılı');

            }

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