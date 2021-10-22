@extends('layouts.front')
@section('title', ' Ana Sayfa')
@section('slider')
<div id="carouselExampleIndicators" class="with-background carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @php
            for ($i=0; $i < count($slider) ; $i++) { 
                if ($i==0) {
                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>';

                }
                else {
                    $sOrder=$i+1;
                echo '<li data-target="#carouselExampleIndicators" data-slide-to='.$sOrder.' ></li>';
         
                }
         
            }
        @endphp
       
      
     
    </ol>
    <div class="carousel-inner">
        @foreach ($slider as $sliders )
            @if($loop->first)
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{$sliders->slider_url}}" alt="Slider">
                </div>
            @else
                
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{$sliders->slider_url}}" alt="Slider">
                </div>
            @endif
        @endforeach
     
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5 style="color: black">Laravel Ecommerce </h5>
        <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus quam vel posuere euismod. Mauris facilisis vitae mauris id ultricies. Vestibulum at pulvinar orci. Duis est purus, euismod et tincidunt et, porta et ante.</p>
      </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Geri</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">İleri</span>
    </a>
  </div>
@endsection



@section('content')
<br/>
<br/>
<br/>
<br/>
<div class="featured-section">
<div class="container">
    <h1 class="text-center">Laravel Ecommerce</h1>

    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae
        nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est
        reprehenderit sunt aliquid possimus temporibus enim eum hic lorem.</p>

    <div class="text-center button-container">
        <a href="#" class="button">Seçili Ürünlerimiz</a>
    </div>



    <div class="products text-center">
        
        @foreach ($product as $item)
            
       
        <div class="product">
            <a href="{{ route('productDetails', ['slug'=>$item->slug]) }}"><img src="{{$item->image->first()->image_url ?? 'none'}}" alt="product"></a>
            <a href="{{ route('productDetails', ['slug'=>$item->slug]) }}">
                <div class="product-name">{{$item->title}}</div>
            </a>
            <div class="product-price">{{$item->price}}₺</div>
        </div>
        @endforeach
    </div> <!-- end products -->

    <div class="text-center button-container">
        <a href="{{ route('shop') }}" class="button">Tüm Ürünleri Gör</a>
    </div>
   
</div> <!-- end container -->

</div>


@endsection

@section('customJS')
    
@endsection