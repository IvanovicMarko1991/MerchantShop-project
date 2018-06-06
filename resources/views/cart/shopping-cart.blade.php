@extends('layouts.app') 

     

@section('content')
@if(Session::has('cart'))
	 	<section class="shopping-cart dark">
	 		<div class="container">
		        <div class="block-heading">
		          <h2 class="display-4">Shopping Cart</h2>
		        </div>
		        <div class="content">
	 				<div class="row">
                            @foreach($merchants as $merchant)
	 					<div class="col-md-12 col-lg-8">
	 						<div class="items">
				 				<div class="product">
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="img/iphone6.jpg">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
															
								 							<a >Merchant:{{$merchant['item']['merchant']}}</a>
								 							<div class="product-info">
									 							<div>Product:{{$merchant['item']['product_name']}}</span></div>
															 <div>Details:{{$merchant['item']['product_details']}}</div>
                                                                <div>Specifications:{{$merchant['item']['product_specifications']}}</div>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-6 quantity">
                                                         <ul style="list-style-type:none;">
                                                        <li style="font-weight:600; size:14px;line-height:21px;">Quantity:{{$merchant['qty']}}</li>
                                                         <li style="font-weight:600; size:14px;line-height:21px;">Price:${{$merchant['item']['current_price']}}</li>
                                                        <li style="font-weight:600; size:14px;line-height:21px;"> Old Price:${{$merchant['item']['old_price']}}</li>
                                                        
                                                        <li style="list-style-type: none;"><a class="btn btn-primary"  href="{{ route('product.addToCart', ['id'=>$merchant['item']['id']])}}" ><i class="fas fa-plus"></i></a>
                                                            <a class="btn btn-primary"   href="{{route('product.reduceByOne', ['id'=>$merchant['item']['id']])}}"><i class="fas fa-minus"></i></a>
                                                            <a class="btn btn-primary" href="{{ route('product.remove', ['id' => $merchant['item']['id']]) }}"><i class="fas fa-times"></i></a></li>
                                                         </ul>
                                                     </div>
                                                     
							 						
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>
				 				
				 			</div>
                         </div>
                         @endforeach
			 			<div class="col-md-12 col-lg-4">
			 				<div class="summary">
			 					<h3>Summary</h3>
			 					<div class="summary-item"><span class="text">Total:${{$totalPrice}}</div>
			 					<a href="{{ route('checkout') }}" ><button type="button" class="btn btn-primary btn-lg btn-block" >Checkout</button></a>
				 			</div>
			 			</div>
		 			</div> 
                 </div>
                 @else 
                 <div class="row">
                         <div class="col-md-6 col-md-offset-3">
                             <h2 class="text-center display-3">No Items in Cart!</h2>
                         </div>
                     </div>
	 		</div>
		</section>
        @endif
@endsection