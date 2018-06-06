<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Merchant;
use App\Cart;
use App\User;
use App\Order;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class PagesController extends Controller
{
  
    
    
    public function contact(){
        return view('/contact');
    }

    public function phones(){
        $phones=DB::table('products')->where('category_product','Phones')->get();
        return view('products/phones')->with('phones',$phones);
    }

    public function tv(){
        $tvs=DB::table('products')->where('category_product','TV')->get();
        return view('products/tv')->with('tvs',$tvs);
    }

    public function tablet(){
        $tablets=DB::table('products')->where('category_product','Tablets')->get();
        return view('products/tablets')->with('tablets',$tablets);
    }
}
