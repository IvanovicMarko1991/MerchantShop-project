@extends('layouts.app') 
     @section('content')
    
     <h1 class="text-center">Tablets</h1>
    <br>
       <div class="container">
        
     <div class="row">
            
     @foreach($tablets as $tablet)
     
          <div class="col-md-3  offset-md-1 thumbnail text-center">

                   <h3><strong>{{$tablet->name_brand}}</strong></h3>

                    <img src="../{{$tablet->cover_image}}" class="img-thumbnail">

                    <h4><strong>{{$tablet->name_product}}</strong></h4>
                    
                    <p>{{$tablet->product_description}}</p>

                    <a href="/products/{{$tablet->id}}"><button class="btn btn-primary">See prices from merchants</button></a>
        
        
          </div>
     
                    
        
                @endforeach


              </div> <br>
             
              
               
              </div>
       

              @endsection 
 