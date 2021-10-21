@extends('layouts.front')
@section('title', 'site title')
@section('breadcrumbs',$category->first()->name)
@section('content')

<div class="row products-section container">
    @isset($category)
    <div class="col-sm-8">
        <h3 style="font-weight: bold">Kategoriler</h3>
        <ul class="list-group">
        @foreach ($category as $categories )
           
                    <li class="list-group-item"> <a href="{{ route('categoryList', ['id'=>$categories->id]) }}"> <i class="fas fa-angle-double-right"></i> {{$categories->name}}</a></li>


              
        @endforeach
    </ul>
</div> <!-- end sidebar -->

    @endisset


    <div >
        <div class="products-header">
            
            <h1 class="stylish-heading">{{$category->first()->name??'Tüm Ürünler'}}</h1>
            <div>
                <strong>Fiyat: </strong>
                <a href="shop6330.html?sort=low_high">En Düşük Fiyat</a> |
                <a href="shop94e1.html?sort=high_low">En Yüksek Fiyat</a>

            </div>
        </div>

        <div class="products text-center">
            @foreach ($product as $item )
            @php
            $data=$item->image->first();
            @endphp
            <div class="product">
                <a href="{{ route('productDetails', ['slug'=>$item->slug]) }}">
                    <img src="{{$data->image_url??'none'}}" alt="product" /></a>
                <a href="{{ route('productDetails', ['slug'=>$item->slug]) }}">
                    <div class="product-name">{{$item->title}}</div>
                </a>
                <div class="product-price">{{$item->price}}</div>
            </div>
            @endforeach


        </div> <!-- end products -->

        <div class="spacer"></div>
        <nav>
            <ul class="pagination">

                {{ $product->links() }}
            </ul>
        </nav>

    </div>
</div>
@endsection