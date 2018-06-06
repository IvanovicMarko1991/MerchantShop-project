@extends('layouts.app') 
     @section('content')
    <div class="container">
    <h3>{{$product->category_product}}/{{$product->name_brand}}/{{$product->name_product}}</h3>
  
     @foreach($product->merchant as $merchan)
        <div class="card card-body bg-light">
                

                           
                   <div class="row">
                       <div class="col-md-3 text-center">
            <img src="../{{$product->cover_image}}" class="img-thumbnail">
                              
            <a href="{{ route('product.addToCart', ['id'=>$merchan->id])}}"><button class="btn btn-primary">Add to Cart</button></a>
                              </div>  
                              <div class="col-md-9 ">
                        <ul class="list-unstyled">

                            <li><h5>Merchant:{{$merchan->merchant}}</h5></li> 
                        <li><h4>Price:<strong><strike>${{$merchan->old_price}}</strike> ${{$merchan->current_price}}</strong></h4></li>
                        <li><h4>Stock:<strong>{{$merchan->stock}}</strong></h4></li>
                            <li><h4>Product type:{{$merchan->product_type}}</h4></li>  
                            <li><h4>Details:{{$merchan->product_details}}</h4></li>
                            <li><h4>Specifications:{{$merchan->product_specifications}}</h4></li>    
                           <li> 
                            
                              </select>
                              
                           </li>
                            
                            <li><h4>Warranty:{{$merchan->product_warranty}}</h4></li>    
                            
                         </ul>
                               
                           </div>
                           
                      </div>
               
        </div>
          @endforeach
</div>
    @endsection 
