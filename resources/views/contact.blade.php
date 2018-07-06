@extends('layouts.app') @section('content')

<h1 class="text-center display-4">Contact Page</h1>
<br>
<br>
<div class="container">



    <div class="text-center well">
        <h1>Do you want to become one of our merchants?</h1>
        <h2>Send us an email or give us a call !</h2>
    </div>
    <br>
    <br>
    <div class="row ">

        <div class="offset-md-1 col-md-3    ">
            <h2>Email</h2>
            <p class="contact-email">
                <strong>shopmerchant@gmail.com</strong>
            </p>
        </div>

        <div class=" col-md-3 offset-md-1  ">
            <h2>Phone</h2>
            <p class="phone">+40 7324534534</p>
        </div>

        <div class=" offset-md-1 col-md-3  ">
            <h2>Social Media</h2>

            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>


        </div>
    </div>
</div>

<style scoped>
    body {
        background: #ffffffc4;
        color: blue
    }
    strong{
        font-size: 1.3em;
    }
    
</style>

@endsection