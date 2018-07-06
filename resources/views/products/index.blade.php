 @extends('layouts.app') 

     

     @section('content')
    
     <div class="container">
       
         <h1 class="text-center title">Shop Merchant</h1>
       
         <h2 class="text-center subtitle1">You search the product we bring the offers</h1>
         <br><br>
         
            <div class="container">
              
                  
               <h3 class="subtitle">Latest Offer</h3>
               <br>
                
                        <div class="row">
                           
                                <div  class="thumbnail">
                                    
                                    @foreach($products as $product)
                                    <div  class="col-md-2 list-unstyled list-inline-item" >
                                        
                                            <div class="thumbnail">
                                                <img class="img-thumbnail" src={{$product->cover_image}} alt="">
                                            </div>
                                            <div class="caption text-center">
                                            <h2><strong>{{$product->name_brand}}</strong></h2>
                                                <p><strong>{{$product->name_product}}</strong></p>
                                               
                                                <a class="btn btn-primary" href="/products/{{$product->id}}"> Read More</a>
                                                <br><br>
                                            </div>
                                        
                                        </div>
                                    @endforeach
                                  
                               
                                </div>
                              
                        
                          </div>
         
            </div>
           
        </div>
            <style scoped>
                .thumbnail{
                    padding: 0;
                    margin: 4px;
                }
               .subtitle{
                   font-size: 2.5em;
                   font-weight: bold;
               }
               .title{
                   font-size:4em;
               }
               .subtitle1{
                   font-size:1.8em;
               }
            </style>
    @endsection 
