@extends('layouts.front')
@section('title', 'site title')
@section('content')
<div class="cart-section container">
    <div>
        @if(isset($durum))
            
        <div class="alert alert-success">
            {{$durum}}
        </div>
        @endif

        <div class="cart-table">
            
            @foreach ($cartsItem as $item )


            <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="{{ route('productDetails', ['slug'=>$item->slug]) }}"><img
                            src="{{$item->product->image->first()->image_url ??'none'}}" alt="item"
                            class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="https://laravelecommerceexample.ca/shop/laptop-12">{{$item->product->title}}</a></div>
                        <div class="cart-table-description">{{$item->product->description}}</div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form action="https://laravelecommerceexample.ca/cart/eef12573176125ce53e333e13d747a17"
                            method="POST">
                            <input type="hidden" name="_token" value="Ra7kLKpKw4mCOzdqZtcHEhAzMY1AUQIJb2Ba624a">
                            <input type="hidden" name="_method" value="DELETE">

                            <button type="submit" class="cart-options">Remove</button>
                        </form>
                    </div>
                    <div>
                        <select class="quantity" data-id="eef12573176125ce53e333e13d747a17" data-productquantity="10">
                            @for ($i = 0; $i < 10; $i++)
                            @if($item->quantity==$i)
                            <option selected> {{$i}}</option>
                            @endif
                            <option> {{$i}}</option>
                            @endfor
                         
                        </select>
                    </div>
                    <div>₺{{$item->product->price}}</div>
                </div>
            </div> <!-- end cart-table-row -->



@endforeach

        </div> <!-- end cart-table -->


    
        <div class="cart-totals">
            <div class="cart-totals-left">
                Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like
                figuring out :).
            </div>

            <div class="cart-totals-right">
                <div>
                    Subtotal <br>
                    shipping fee<br>
                    <span class="cart-totals-total">Total</span>
                </div>
                <div class="cart-totals-subtotal">
                    ₺4990.68 <br>
                    ₺10 <br>
                    <span class="cart-totals-total">₺5639.47</span>
                </div>
            </div>
        </div> <!-- end cart-totals -->

        <div class="cart-buttons">
            <a href="https://laravelecommerceexample.ca/shop" class="button">Continue Shopping</a>
            <a href="https://laravelecommerceexample.ca/checkout" class="button-primary">Proceed to Checkout</a>
        </div>



        <h3>You have no items Saved for Later.</h3>


    </div>

</div>
@endsection
@section('customJS')

@endsection