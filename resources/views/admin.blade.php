@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                
                <div class="panel-body">
                    You are logged in as <strong>ADMIN </strong>
                </div>

            <button ><a href="{{route('admin.create')}}" class="nav-link">Create Product</a></button>
            <button ><a href="{{route('admin.merchant')}}" class="nav-link">Create Merchant</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
