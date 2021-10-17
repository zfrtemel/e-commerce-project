@extends('layouts.front')
@section('title', 'site title')

@section('content')

<div class="products-section container">
    <div class="sidebar">
        <h3>Kategoriler</h3>
        <ul>
            @foreach ($category as $categories )
            <li class=""><a href="{{ route('categoryList', ['id'=>$categories->id]) }}">{{$categories->name}}</a></li>
                
            @endforeach
        
        </ul>
    </div> <!-- end sidebar -->
    <div>
        <div class="products-header">
            <h1 class="stylish-heading">Featured</h1>
            <div>
                <strong>Price: </strong>
                <a href="shop6330.html?sort=low_high">Low to High</a> |
                <a href="shop94e1.html?sort=high_low">High to Low</a>

            </div>
        </div>

        <div class="products text-center">
            @foreach ($product as $item )
            @php
                 $data=$item->image->first();
            @endphp
            <div class="product">
                <a href="{{ route('hompage') }}">
                    <img src="{{$data->image_url??'none'}}" alt="product" /></a>
                <a href="{{ route('hompage') }}">
                    <div class="product-name">{{$item->title}}</div>
                </a>
                <div class="product-price">{{$item->price}}</div>
            </div>
            @endforeach


        </div> <!-- end products -->

        <div class="spacer"></div>
        <nav>
            <ul class="pagination">

                <li class="page-item">
                    <a class="page-link" href="shop99ab.html?sort=high_low&amp;page=1" rel="prev"
                        aria-label="&laquo; Previous">&lsaquo;</a>
                </li>





                <li class="page-item"><a class="page-link" href="shop99ab.html?sort=high_low&amp;page=1">1</a></li>
                <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>


                <li class="page-item disabled" aria-disabled="true" aria-label="Next &raquo;">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            </ul>
        </nav>

    </div>
</div>
@endsection