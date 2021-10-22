<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
Use App\Models\Order;
Use App\Models\Product;
Use App\Models\User;
Use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    
 
    public function checkoutList()
    {
        $user=Auth::User();
        $ordersItem=Order::where('user_id',$user->id)->get();
//  $orderProduct=$ordersItem->product()->simplePaginate(1);

return view('front.checkout.orders',compact('ordersItem'));
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
          'billing_total'=>$request->billing_total]
        );
            if ($orderItem) {
                foreach ($cartsItem as $cartItem) {
                      $orderItem->product_orders()->create([
                          'product_id'=>$cartItem->product->id
                      ]);
                }
               
              

            }

       return view('front.result')->with('durum','Siparişin Alındı'); 
    }


    
    public function checkout()
    {
        $user=Auth::User();
        $cartsItem=Cart::where('user_id',$user->id)
                    ->where('quantity','!=',0)
                        ->with('product.image')
                            ->get();
        return view('front.checkout.order',compact('cartsItem')); 
    }
}
