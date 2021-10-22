@extends('layouts.front')
@section('title', 'Siparişlerim')

@section('content')

<section class="col-lg-12">
  <!-- Toolbar-->
  <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
    <h2 class="fs-base text-dark mb-0">Siparişleriniz</h2>
  </div>
  <!-- Wishlist-->
  

  <!-- Item-->
  <div class="col-lg-12 ">
    <table class="table-responsive-md table table-hover">
      <thead class="bg-light">
        <tr>
          <th class="py-4 pl-4 text-sm border-0">Sipariş No</th>
          <th class="py-4 text-sm border-0">İsim</th>
          <th class="py-4 text-sm border-0">Sipariş Şehri</th>
          <th class="py-4 text-sm border-0">Sipariş Toplamı</th>
          <th class="py-4 text-sm border-0">Durum</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ordersItem as $item )
        <tr>
      
          <th class="pl-4 py-5 align-middle">{{$item->id}}</th>
          <td class="py-5 align-middle">{{$item->billing_name}}</td>
          <td class="py-5 align-middle">{{$item->billing_city}}</td>
          <td class="py-5 align-middle"><span class="badge badge-danger-light">{{$item->billing_total}}</span></td>
          <td class="py-5 align-middle"><a href="" class="btn btn-outline-dark btn-sm">
          @if ($item->isShiped==2)
             Teslim Edildi
              @elseif ($item->isShiped==1)
              Kargoya Verildi
          @else
              Siparişiniz Hazırlanıyor
          @endif
          
          
          </a></td>
        </tr>
  @endforeach

      </tbody>
    </table>
  </div>



</section>



@endsection

@section('customJS')

@endsection