@extends('layouts.app') 
     @section('content')
     <h1 class="text-center">Products</h1>
        <div class="well">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Brand</th>
                            <th>Merchant</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th>{{$product->name_product}}</th>
                            <th>{{$product->name_brand}}</th>
                            <th>{{$merchants->merchant}}</th>
                            
                    </tbody>
                  
                </table>
        </div> 

    @endsection 
