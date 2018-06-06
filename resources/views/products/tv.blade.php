@extends('layouts.app') 
     @section('content')
    
     <h1 class="text-center">TV</h1>
    <br>
       <div class="container">
        
     <div class="row">
            
     @foreach($tvs as $tv)
     
          <div class="col-md-3  offset-md-1 thumbnail text-center">

                   <h3><strong>{{$tv->name_brand}}</strong></h3>

                    <img src="../{{$tv->cover_image}}" class="img-thumbnail">

                    <h4><strong>{{$tv->name_product}}</strong></h4>
                    
                    <p>{{$tv->product_description}}</p>

                    <a href="/products/{{$tv->id}}"><button class="btn btn-primary">See prices from merchants</button></a>
        
        
          </div>
     
                    
        
                @endforeach


              </div> <br>
             
              
               
              </div>
       

              @endsection 
 