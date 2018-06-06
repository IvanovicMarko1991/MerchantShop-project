@extends('layouts.app') 
@section('extra-css')
<link href="css/custom.css" rel="stylesheet">
@endsection
    
@section('pagespecificscripts')
<script src="js/checkout.js" defer></script>
@stop


@section('content')
<div class="container">
<div class=" justify-content-center">
    <div class="">
        <h1>Checkout</h1>
        <h4>Your Total: ${{ $total }}</h4>

        
        <form action="{{ url('/checkout') }}" method="POST" id="payment-form">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" required>
          </div>

          <div class="form-group">
            <label for="name_on_card">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

          <div class="form-group">
              <label for="name_on_card">Name on Card</label>
              <input type="text" class="form-control" id="name_on_card" name="name_on_card" required>
          </div>

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="adress" required>
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" name="city" required>
                  </div>
              </div>

              <div class="col-md-3">
                  <div class="form-group">
                      <label for="province">Province</label>
                      <input type="text" class="form-control" id="province" name="province" required>
                  </div>
              </div>

          </div>

          <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="postalcode">Postal Code</label>
                      <input type="text" class="form-control" id="postalcode" name="postalcode" required>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="form-group">
                      <label for="country">Country</label>
                      <input type="text" class="form-control" id="country" name="country" required>
                  </div>
              </div>

              <div class="col-md-4">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" required>
                  </div>
              </div>

          </div>

         
          <div class="form-group">
              <label for="card-element">Credit Card</label>
              <div id="card-element">
                <!-- a Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors -->
            <div id="card-errors" role="alert"></div>
          </div>

          <div class="spacer"></div>

          <button type="submit" class="btn btn-success">Submit Payment</button>
      </form>
    
</div>
</div>
@endsection
   

     

    
     
    