@extends('layouts.app') @section('content')
<div class="container">
    <h3>{{$product->category_product}}/{{$product->name_brand}}/{{$product->name_product}}</h3>

    @foreach($product->merchant as $merchan)
    <div class="card card-body bg-light">



        <div class="row">
            <div class="col-md-3 text-center">
                <img src="../{{$product->cover_image}}" class="img-thumbnail">

                <a href="{{ route('product.addToCart', ['id'=>$merchan->id])}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </a>
            </div>
            <div class="col-md-9 text">
                <ul class="list-unstyled">

                    <li>
                        <p>Merchant:{{$merchan->merchant}}</p>
                    </li>
                    <li>
                        <p>Price:
                            <strong>
                                <strike>${{$merchan->old_price}}</strike> ${{$merchan->current_price}}</strong>
                        </p>
                    </li>
                    <li>
                        <p>Product type:{{$merchan->product_type}}</p>
                    </li>
                    <li>
                        <p>Details:{{$merchan->product_details}}</p>
                    </li>
                    <li>
                        <p>Specifications:{{$merchan->product_specifications}}</p>
                    </li>
                    <li>

                        </select>

                    </li>

                    <li>
                        <p>Warranty:{{$merchan->product_warranty}}</p>
                    </li>

                </ul>

            </div>

        </div>

    </div>
    @endforeach
</div>
<style scoped>
    body {
        background: #f9fff9;
        columns: #000000;
    }
    .text{
        font-weight: bold;
        font-size: 1.4em;
    }
    .card{
        border: 1px solid #d1d1d1;
        margin: 5px;
    }
</style>

@endsection