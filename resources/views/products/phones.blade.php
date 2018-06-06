@extends('layouts.app') 
     @section('content')
    
     <h1 class="text-center">Phones</h1>
    <br>
       <div class="container">
        
     <div class="row">
            
     @foreach($phones as $phone)
     
          <div class="col-md-3  offset-md-1 thumbnail text-center">

                   <h3><strong>{{$phone->name_brand}}</strong></h3>

                    <img src="../{{$phone->cover_image}}" class="img-thumbnail">

                    <h4><strong>{{$phone->name_product}}</strong></h4>
                    
                    <p>{{$phone->product_description}}</p>

                    <a href="/products/{{$phone->id}}"><button class="btn btn-primary">See prices from merchants</button></a>
        
        
          </div>
     
                    
        
                @endforeach


              </div> <br>
             
              
               
              </div>
       

              @endsection 
 