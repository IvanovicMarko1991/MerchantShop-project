@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ Auth::user()->name }} account</h3> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h4>Your Orders</h4>
                        @foreach($orders as $order)
                        <div class="container">
                           
                             @foreach($order->cart->items as $item)
                             <div class=" row ">
                                 
                        <ul class="list-group ">

                           
                            <li class="list-group-item ">
                                <h3>Date:{{$order->created_at}}</h3>
                            <h3>Ordered:{{$item['item']['product_name']}} from: {{$item['item']['merchant']}}</h3>
                              
                            <h3>Specifications:{{$item['item']['product_specifications']}}</h3>  
                                <h3>Qty:{{$item['qty']}}</h3>  
                                <h3>Total order price:<span class="badge ">{{  $order->cart->totalPrice}} $</span></h3>
                               
                              

                            </li>
                          
                                
                            
                            </div>
                            @endforeach
                            
                        </ul>
                    </div>
                   
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
