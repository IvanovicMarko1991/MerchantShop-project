<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Merchant;
use App\Admin;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function create(){
        return view('products.create');

    }
    public function create_merchant(){
        return view('merchant.merchant');
    }

    public function product(Request $request){
        $this->validate($request,[
            'category_product' => 'required',
            'name_brand' => 'required',
            'name_product' => 'required',
            'product_description' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'timestamps' => 'required'
        ]);

        if($request->hasFile('cover_image')){
     
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
       
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          
            $extension = $request->file('cover_image')->getClientOriginalExtension();
          
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
        
            $path = $request->file('cover_image')->storeAs('public/img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new Product;
        $product->category_product = $request->input('category_product');
        $product->name_brand = $request->input('name_brand');
        $product->name_product = $request->input('name_product');
        $product->product_description = $request->input('product_description');
        $product->cover_image = $fileNameToStore;
        $product->timestamps=$request->input('timestamps');
        $product->save();
        return redirect('/products')->with('success', 'Product Created');
    }

    public function merchant(Request $request){
        $this->validate($request,[
            'product_id' => 'required',
            'merchant' => 'required',
            'current_price' => 'required',
            'old_price' => 'required',
            'stock' => 'required',
            'product_type' => 'required',
            'product_name' => 'required',
            'product_details' => 'required',
            'product_specifications' => 'required',
            'product_color' => 'required',
            'product_warranty' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'timestamps' => 'required'


        ]);
        
        if($request->hasFile('cover_image')){
     
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
       
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          
            $extension = $request->file('cover_image')->getClientOriginalExtension();
          
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
        
            $path = $request->file('cover_image')->storeAs('public/img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $merchant=new Merchant;
        $merchant->merchant = $request->input('merchant');
        $merchant->current_price= $request->input('current_price');
        $merchant->old_price= $request->input('old_price');
        $merchant->stock= $request->input('stock');
        $merchant->product_type= $request->input('product_type');
        $merchant->product_name=$request->input('product_name');
        $merchant->product_details=$request->input('product_details');
        $merchant->product_specifications=$request->input('product_specifications');
        $merchant->product_color=$request->input('product_color');
        $merchant->product_warranty=$request->input('product_warranty');
        $merchant->cover_image = $fileNameToStore;
        $merchant->save();

        return redirect('/product')->with('success', 'Merchant added');
        
        
        
        
    }
    public function destory_product($id){
        $product=Product::find($id);

        if(auth()->admin()->id!==$product->id){
            return redirect('/products')->with('error', 'Unauthorized Page');
        }
        
        if($product->cover_image != 'noimage.jpg'){
            Storage::delete('public/img/'.$product->cover_image);
        }

        $product->delete();
        return redirect('/products')->with('success','Product deleted');
    }

    public function destroy_merchant($id){
        $merchant=Merchant::find($id);

        if(auth()->admin()->id !==$merchant->id){
            return redirect('/products')->with('error', 'Unauthorized Page');
        }
        $merchant->delete();

        return redirect('/products')->with('success', 'Merchant deleted');
    }
}
