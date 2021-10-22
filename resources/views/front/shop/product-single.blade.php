@extends('layouts.front')
@section('title', '{{$product->title}}')
@section('breadcrumbs',$product->title)
@section('content')
@if(isset($durum))
            
    <div class="alert alert-success">
        {{$durum}}
    </div>
    @endif
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
            <div class="badge badge-success">Stokta Mevcut</div>
        </div>
        <div class="product-section-price">{{$product->price}}₺</div>

        <p>
            {{$product->description}}
        </p>

        <p>&nbsp;</p>

        <form action="{{ route('CartAdd', ['id'=>$product->id]) }}" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="button button-plain">Sepete Ekle</button>
        </form>
    </div>
   
</div> <!-- end product-section -->


<div class="might-like-section">
    <div class="container">
        <h2>You might also like...</h2>
        <div class="might-like-grid">
        {{-- for alanda döngü 4 e yükseltilecek yeteri kadar seeder verisi olmadığı için hata veriyor --}}
            @for($i = 0; $i < 2; $i++) 
            <a href="{{ route('productDetails', ['slug'=>$releated[$i]->slug]) }}" class="might-like-product">
                <img src="{{$releated[$i]->image->first()->image_url ?? 'NONE'}}" alt="product">
                <div class="might-like-product-name">{{$releated[$i]->title}}</div>
                <div class="might-like-product-price">{{$releated[$i]->price}}₺</div>
            </a>
            @endfor
        
         
            
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