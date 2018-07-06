<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;


Route::get('/contact','PagesController@contact');
Route::get('/products/phones',[ 
    'uses' => 'PagesController@phones',
    'as' => 'phones'
    ]);


Route::get('/products/tv',[ 
    'uses' => 'PagesController@tv',
    'as' => 'tv'
    ]);
Route::get('/products/tablet',[ 
    'uses' => 'PagesController@tablet',
    'as' => 'tablet'
    ]);


    Route::get('/search','ProductController@search')->name('search');

Route::get('/',[
    'uses'=> 'ProductController@carousel',
    'as' =>'index'
    ]);



Route::resource('products','ProductController');

    Route::get('products/{id}?sort=ASC',[
        'uses'=>'ProducutsController@asc',
         'as'=>'product.asc'
        ]);



     Route::get('/add-to-cart/{id}',[ 
     'uses' => 'ProductController@getAddToCart',
     'as' => 'product.addToCart'
       ]);

     Route::get('/reduce/{id}',[
         'uses'=>'ProductController@getReduceByOne',
         'as'=>'product.reduceByOne'
     ]);

     Route::get('/remove/{id}', [
        'uses' => 'ProductController@destroy',
        'as' => 'product.remove'
    ]);
    
        Route::get('/shopping-cart',[ 
        'uses' => 'ProductController@getCart',
        'as' => 'product.shoppingCart'
        ]);

        Route::get('/checkout',[
            'uses'=>'ProductController@getCheckout',
            'as'=> 'checkout' ,
            'middleware'=>'auth'
                   ]);


    


        Route::post('/checkout',[
            'uses'=>'ProductController@postCheckout',
            'as'=>'checkout',
            'middleware'=>'auth'
        ]);
           
     

    


Auth::routes();



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [
        'uses' => 'HomeController@getProfile',
        'as' => 'login.profile'
    ]);
    });


Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('products/create', [
        'uses' =>'AdminController@create',
        'as' => 'admin.create'
    ]);
    Route::get('merchant/merchant',[
        'uses' =>'AdminController@create_merchant',
        'as'=> 'admin.merchant'
    ]);
   Route::post('products/create', 'AdminController@product');
   Route::post('merchant/merchant', 'AdminController@merchant');
  });

