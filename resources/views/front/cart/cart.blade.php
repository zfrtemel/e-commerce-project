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
                        <div class="cart-table-item"><a href="{{ route('productDetails', ['slug'=>$item->product->slug]) }}">{{$item->product->title}}</a></div>
                        <div class="cart-table-description">{{$item->product->description}}</div>
                    </div>
                </div>
                <div class="cart-table-row-right">
                    <div class="cart-table-actions">
                        <form action="{{ route('cartDelete', $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }} 

                            <button type="submit" class="cart-options">Sil</button>
                        </form>
                    </div>
                    <div>
                        <select class="quantity"  data-productquantity="10">
                            @for ($i = 0; $i < 10; $i++)
                            @if($item->quantity==$i)
                            <option data-cart-id="{{$item->id}}" selected> {{$i}}</option>
                            @endif
                            <option data-cart-id="{{$item->id}}"> {{$i}}</option>
                            @endfor
                         
                        </select>
                    </div>
                    <div>{{$item->product->price}}₺</div>
                </div>
            </div> <!-- end cart-table-row -->



@endforeach

        </div> <!-- end cart-table -->


   
        <div class="cart-totals">
            <div class="cart-totals-left">
             sepetteki ürünlerinizi satın alabilirsiniz
            </div>

            <div class="cart-totals-right">
                <div>
                    Ara Toplam <br>
                    Kargo Ücreti<br>
                    <span class="cart-totals-total">Toplam</span>
                </div>
                <div class="cart-totals-subtotal">
                    @php
                        $total=0;
                        foreach ($cartsItem as $item)
                        {
                            $total+=$item->product->price*$item->quantity;            
                
                        }
            
                    @endphp
                     <p class="totalPrice">  {{$total}} ₺</p>
                     <br/>
                    10₺ <br>
                    <span class="cartTotal cart-totals-total">{{$total+10}}₺</span>
                </div>
            </div>
        </div> <!-- end cart-totals -->

        <div class="cart-buttons">
            <a href="{{ route('shop') }}" class="button">Mağazaya Dön</a>
            <a href="{{ route('order') }}" class="button-primary">Sipariş Ver</a>
        </div>



    

    </div>

</div>
@endsection
@section('customJS')
<script>
$(document).ready(function(){
    $('select').on('change', function(e) {
        var data={
        'id':$(this).children("option:selected").attr('data-cart-id'),
        'quantity':this.value
        };

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/cart/cartProductUpdate',
            contentType: 'application/json;charset=utf-8',
            data:JSON.stringify(data),
            dataType: 'json',
            success: function (result) {
                console.log(result);
            }

        });
    });
});
  </script>
@endsection