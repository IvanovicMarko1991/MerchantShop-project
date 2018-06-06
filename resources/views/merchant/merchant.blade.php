@extends('layouts.app') 

     

@section('content')
<h1>Create Merchant</h1>
{!! Form::open(['action' => 'AdminController@merchant', 'method'=> 'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('product_id', 'Product ID')}}
    {{Form::text('product_id', '', ['class'=> 'form-control', 'placeholder' => 'Product ID'])}}
</div>
<div class="form-group">
    {{Form::label('merchant', 'Merchant Name')}}
    {{Form::text('merchant', '', ['class'=>'form-control','placeholder' => 'Merchant Name'])}}
</div>
<div class="form-group">
    {{Form::label('current_price', 'Current Price')}}
    {{Form::text('current_price', '', ['class'=>'form-control','placeholder' => 'Current Price'])}}
</div>
<div class="form-group">
    {{Form::label('old_price', 'Old Price')}}
    {{Form::text('old_price', '', ['class'=>'form-control','placeholder' => 'Old Price'])}}
</div>
<div class="form-group">
        {{Form::label('stock', 'Stock')}}
        {{Form::text('stock', '', ['class'=>'form-control','placeholder' => 'Stock'])}}
 </div>
<div class="form-group">
            {{Form::label('product_type', 'Product Type')}}
            {{Form::text('product_type', '', ['class'=>'form-control','placeholder' => 'Product type'])}}
</div>
<div class="form-group">
        {{Form::label('product_name', 'Product Name')}}
        {{Form::text('product_name', '', ['class'=>'form-control','placeholder' => 'Product Name'])}}
</div>
<div class="form-group">
        {{Form::label('product_details', 'Product Details')}}
        {{Form::textarea('product_details', '', ['class'=>'form-control','placeholder' => 'Product Details'])}}
</div>
<div class="form-group">
        {{Form::label('product_specifications', 'Product Specifications')}}
        {{Form::textarea('product_specifications', '', ['class'=>'form-control','placeholder' => 'Product Specifications'])}}
</div>
<div class="form-group">
        {{Form::label('product_color', 'Product Color')}}
        {{Form::text('product_color', '', ['class'=>'form-control','placeholder' => 'Product Color'])}}
</div>
<div class="form-group">
        {{Form::label('product_warranty', 'Product Warranty')}}
        {{Form::text('product_warranty', '', ['class'=>'form-control','placeholder' => 'Product Warranty'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
<div class="form-group">
    {{Form::label('timestamps', 'Timestamps')}}
    {{Form::date('timestamps', '',['class'=>'form-control','placeholder' => 'Date created'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection 