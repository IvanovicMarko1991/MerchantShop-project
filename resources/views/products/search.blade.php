@extends('layouts.app') 
     @section('content')
    <div class="container">
        <h1>Search Results</h1>
        <div class="container"></div>
        @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
</div>
<div class="container">
    <h3 class="text-center">{{$products->count()}} result(s) for '{{request()->input('query')}}'</h3>
        
          <div class="row justify-content-center">
                <div  class="thumbnail">
                                    
                        @foreach($products as $product)
                        <div  class="col-md-2 list-unstyled list-inline-item" >
                            
                                <div class="thumbnail">
                                       
                                    <img class="img-fluid img-thumbnail" src={{$product->cover_image}} alt="">
                                </div>
                                <div class="caption text-center">
                                <h3>{{$product->name_brand}}</h3>
                                    <h4>{{$product->name_product}}</h4>
                                   
                                    <a class="btn btn-primary" href="/products/{{$product->id}}">See Merchants</a>
                                    <br><br>
                                </div>
                            
                            </div>
                        @endforeach
                      
                   
                    </div>
                  

        </div>
      


    </div>

        @endsection