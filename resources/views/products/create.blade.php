@extends('layouts.app') 

     

@section('content')
<h1>Create Product</h1>
{!! Form::open(['action' => 'AdminController@product', 'method'=> 'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('category_product', 'Category Product')}}
    {{Form::text('category_product', '', ['class'=> 'form-control', 'placeholder' => 'Category Product'])}}
</div>
<div class="form-group">
    {{Form::label('name_brand', 'Name Brand')}}
    {{Form::text('name_brand', '', ['class'=>'form-control','placeholder' => 'Name Brand'])}}
</div>
<div class="form-group">
    {{Form::label('name_product', 'Name Product')}}
    {{Form::text('name_product', '', ['class'=>'form-control','placeholder' => 'Name Product'])}}
</div>
<div class="form-group">
    {{Form::label('product_description', 'Product Description')}}
    {{Form::textarea('product_description', '', ['class'=>'form-control','placeholder' => 'Product Description'])}}
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