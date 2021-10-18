@extends('layouts.front')
@section('title', 'site title')
@section('content')
<div class="product-section container">
    
    <div>
        @foreach ($product->image as $img )
            @if ($loop->first)
                <div class="product-section-image">
                    <img src="{{$img->image_url}}" alt="product" class="active" id="currentImage">
                </div>
            @endif
            @endforeach
           
            <div class="product-section-images">
              @foreach ($product->image as $img)
              <div class="product-section-thumbnail selected">
                <img src="{{$img->image_url}}" alt="product">
            </div>
              @endforeach
                

              
            </div>
       

    </div>
    <div class="product-section-information">
        <h1 class="product-section-title">{{$product->title}}</h1>
        <div class="product-section-subtitle">{{$product->description}}</div>
        <div>
            <div class="badge badge-success">In Stock</div>
        </div>
        <div class="product-section-price">${{$product->price}}</div>

        <p>
            {{$product->description}}
        </p>

        <p>&nbsp;</p>

        <form action="{{ route('CartAdd', ['id'=>$product->id]) }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="button button-plain">Add to Cart</button>
        </form>
    </div>
   
</div> <!-- end product-section -->

<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
            <a href="camera-9.html" class="might-like-product">
                <img src="../storage/products/dummy/camera-9.jpg" alt="product">
                <div class="might-like-product-name">Camera 9</div>
                <div class="might-like-product-price">$2280.16</div>
            </a>
            <a href="tablet-8.html" class="might-like-product">
                <img src="../storage/products/dummy/tablet-8.jpg" alt="product">
                <div class="might-like-product-name">Tablet 8</div>
                <div class="might-like-product-price">$1017.73</div>
            </a>
            <a href="camera-6.html" class="might-like-product">
                <img src="../storage/products/dummy/camera-6.jpg" alt="product">
                <div class="might-like-product-name">Camera 6</div>
                <div class="might-like-product-price">$2384.02</div>
            </a>
            <a href="desktop-9.html" class="might-like-product">
                <img src="../storage/products/dummy/desktop-9.jpg" alt="product">
                <div class="might-like-product-name">Desktop 9</div>
                <div class="might-like-product-price">$4105.83</div>
            </a>

        </div>
    </div>
</div>


@endsection


@section('customJS')
<script>
    (function () {
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');

        images.forEach((element) => element.addEventListener('click', thumbnailClick));

        function thumbnailClick(e) {
            currentImage.classList.remove('active');

            currentImage.addEventListener('transitionend', () => {
                currentImage.src = this.querySelector('img').src;
                currentImage.classList.add('active');
            })

            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }

    })();
</script>
@endsection