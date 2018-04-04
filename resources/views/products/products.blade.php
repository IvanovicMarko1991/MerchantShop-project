@extends('layouts.app') 
     @section('content')
     <h1 class="text-center">Products</h1>
     @if(count($products) > 0)
     @foreach($products as $product)
        <div class="well">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Product name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$product->category_product}}</th>
                            <th>{{$product->name_brand}}</th>
                            <th>{{$product->name_product}}</th>                          
                            <th>{{$product->product_description}}</th>
                            <th><a href="/products/{{$product->id}}">See prices from diferent merchants</a></th>
                            
                        </tr>
                    </tbody>
                </table>
        </div>
     @endforeach
     @else
        <p>No products,sorry</p>
     @endif
    @endsection 
