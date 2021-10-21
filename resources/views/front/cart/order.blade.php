@extends('layouts.front')
@section('title', 'site title')



@section('content')
<div class="container">



  <h1 class="checkout-heading ">Checkout</h1>
  <div class="checkout-section">
    <div>
      <form action="{{ route('orderAdd') }}" method="POST" id="payment-form">
        {{ csrf_field() }}
        <h2>Sipariş Detayları</h2>

        <div class="form-group">
          <label for="email">Mail Adres</label>
          <input type="email" class="form-control" id="billing_Email" name="billing_Email"
            value="{{ Auth::user()->email }}" readonly="">
        </div>
        <div class="form-group">
          <label for="name">İsim</label>
          <input type="text" class="form-control" id="billing_name" name="billing_name" value="{{ Auth::user()->name }}"
            required="">
        </div>
        <div class="form-group">
          <label for="address">Adres</label>
          <input type="text" class="form-control" id="billing_adress" name="billing_adress" value="" required="">
        </div>

        <div class="half-form">
          <div class="form-group">
            <label for="city">Şehir</label>
            <input type="text" class="form-control" id="billing_city" name="billing_city" value="" required="">
          </div>

        </div> <!-- end half-form -->

        <div class="half-form">
          <div class="form-group">
            <label for="postalcode">Posta Kodu</label>
            <input type="text" class="form-control" id="postalcode" name="postalcode" value="" required="">
          </div>
          <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="" required="">
          </div>
        </div> <!-- end half-form -->
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Sipariş Notu</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="customer_note" rows="3"></textarea>
        </div>
        <div class="spacer"></div>

        <h2>Ödeme Detayları</h2>

        <div class="form-group">
          <label for="name_on_card">Kart Üzerindeki İsim</label>
          <input required type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
        </div>

        <div class="form-group">
          <label for="card-element">
            Kredi Kart Numarası
          </label>
          <div>
            <input name="billing_card_number" required id="billing_card_number"
              class="StripeElement StripeElement--empty" />
          </div>

          <!-- Used to display form errors -->
          <div id="card-errors" role="alert"></div>
        </div>
        <div class="spacer"></div>

        <button type="submit" id="complete-order" class="button-primary full-width">Siparişi Tamamla</button>


      </form>

    </div>



    <div class="checkout-table-container">
      <h2>Your Order</h2>

      <div class="checkout-table">
        <div class="checkout-table-row">
          <div class="checkout-table-row-left">
            <img src="https://laravelecommerceexample.ca/storage/products/dummy/phone-2.jpg" alt="item"
              class="checkout-table-img">
            <div class="checkout-item-details">
              <div class="checkout-table-item">Phone 2</div>
              <div class="checkout-table-description">32GB, 5.9 inch screen, 4GHz Quad Core</div>
              <div class="checkout-table-price">$938.53</div>
            </div>
          </div> <!-- end checkout-table -->

          <div class="checkout-table-row-right">
            <div class="checkout-table-quantity">1</div>
          </div>
        </div> <!-- end checkout-table-row -->

      </div> <!-- end checkout-table -->

      <div class="checkout-totals">
        <div class="checkout-totals-left">
          Subtotal <br>
          Tax (13%)<br>
          <span class="checkout-totals-total">Total</span>

        </div>

        <div class="checkout-totals-right">
          $938.53 <br>
          $122.01 <br>
          <span class="checkout-totals-total">$1060.54</span>

        </div>
      </div> <!-- end checkout-totals -->
    </div>

  </div> <!-- end checkout-section -->
</div>
@endsection



@section('customJS')

@endsection