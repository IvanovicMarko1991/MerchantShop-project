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

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      
      $products=Product::all();
        return view('products.products')->with('products',$products);
       
    }

    public function carousel(){
        $products=Product::orderBy('created_at', 'desc')->get();
        return view('products.index')->with('products',$products);
    }


    public function search(Request $request){

        $request->validate([
            'query'=>'required|min:3',
        ]);

        $query=$request->input('query');

        $products=Product::where('name_product', 'like', "%$query%")->get();
        return view('products.search')->with('products',$products);
    }
   

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product=Product::find($id);
       
        return view('products.show')->with('product',$product);

      
    }

           

    public function getAddToCart(Request $request, $id){
      
        $merchant=Merchant::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($merchant, $merchant->id);
       
      
        $request->session()->put('cart', $cart);   
       
        return redirect()->route('product.shoppingCart');
        
    }

    
    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        
        if(!Session::has('cart')){
            return view('cart.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
       
        return view('cart.shopping-cart',['merchants'=>$cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('cart.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('cart.checkout',['total'=>$total]);
    }


    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return view('cart.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);


        \Stripe\Stripe::setApiKey("sk_test_QfKIFCMqI1EqchjyMhXZsom4");

     
        $charge = \Stripe\Charge::create([
            'amount' => $cart->totalPrice  * 100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $_POST['stripeToken'],
        ]);
        
        
    
        
        
        $order=new Order();
        $order->cart=serialize($cart);
        $order->adress=$request->input('adress');
        $order->name=$request->input('name');
        $order->payment_id=$charge->id;
            
            $q=$cart->totalQty;
            $stock=$cart->items[1]['item']['id'];
            $s=DB::table('merchants')->where('id','=',$stock)->decrement('stock',$q);
      
      
        Auth::user()->orders()->save($order);

       
       Session::forget('cart');

       
      return redirect()->route('index')->with('success','Great Shopping '.$order->name .'!');
    }


   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
       
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

   
}
