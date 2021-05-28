<?php

use App\Http\Controllers\UserController;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {

//     return view('welcome');
// });



// Admin Routes
Route::get('gr','AdminController@admin');
Route::get('admin/order','AdminController@placedorders');
Route::get('admin/accountdetails/{order_id}','AdminController@accountdetails');
Route::get('admin/invoice/{order_id}','AdminController@invoice');

// Category Routes
Route::get('category/add','CategoryController@addcategory');
Route::post('category/save','CategoryController@save');
Route::get('category/display','CategoryController@display');
Route::get('category/view/{id}','CategoryController@view');
Route::get('category/edit/{id}','CategoryController@edit');
Route::post('category/update','CategoryController@update');
Route::get('category/delete/{id}','CategoryController@delete');

//Product Routes
Route::get('product/addproduct','ProductController@create');
Route::post('product/save','ProductController@save');
Route::get('product/display','ProductController@display');
Route::get('product/show/{id}','ProductController@show');
Route::get('product/edit/{id}','ProductController@edit');
Route::post('product/update','ProductController@update');
Route::get('product/delete/{id}','ProductController@delete');

//Coupon Routes
Route::get('coupon/create','CouponController@create');
Route::post('coupon/save','CouponController@save');
Route::get('coupon/display','CouponController@display');
Route::get('coupon/view/{id}','CouponController@view');
Route::get('coupon/edit/{id}','CouponController@edit');
Route::post('coupon/update','CouponController@update');
Route::get('coupon/delete/{id}','CouponController@delete');

//Banner Routes
Route::get('banner/create','BannerController@create');
Route::post('banner/save','BannerController@save');
Route::get('banner/display','BannerController@display');
Route::get('banner/view/{id}','BannerController@view');
Route::get('banner/edit/{id}','BannerController@edit');
Route::post('banner/update','BannerController@update');
Route::get('banner/delete/{id}','BannerController@delete');

//Subimages Routes
Route::get('subimages/create','SubimageController@create');
Route::post('subimages/save','SubimageController@store');
Route::get('subimages/display','SubimageController@show');


//Frontend Routes

Route::get('/','FrontController@index');
Route::get('productdetail/{id}','FrontController@productdetail');

Route::get('checkout','FrontController@checkout');


//Place Order
Route::post('place_order','FrontController@placeorder');

Route::get('thanks','FrontController@thanks');

Route::get('myaccount','FrontController@myaccount');
//Invoice
Route::get('invoice','FrontController@invoice');
Route::get('invoice/{id}','FrontController@invoice');

//Cart
Route::post('addtocart','FrontController@addtocart');
Route::get('cart','FrontController@cart');
Route::get('cart/delete/{id}','FrontController@deletecart');
Route::get('cart/updatequantity/{id}/{product_quantity}','FrontController@updatequantity');


//Popular Categories
Route::get('categories/popularcategories','FrontController@popularcategories');

// FeaturedProducts
Route::get('featuredproducts/{id}','FrontController@featuredproducts');
// CategoryProducts
Route::get('categoryproducts/{id}','FrontController@categoryproducts');

//Login with Socialite Routes
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');



// //Forget Password Email Verification
// Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
// Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');





// checkemail
Route::match(['get', 'post'], '/check-email', 'UserController@checkEmail');

//Custom Register Login
Route::get('login-register','UserController@loginRegister');
Route::post('registerusers','UserController@registerusers');
Route::get('signin','UserController@login'); //front login
Route::post('front/login','UserController@loginUser');
Route::get('front/logout','UserController@logout');
Route::match(['get', 'post'], '/confirm/{code}','UserController@confirmAccount');  

// forgot Password
Route::match(['get', 'post'], '/forgot-password','UserController@forgotpassword'); 



//Paytm Gateway

Route::post('/paytm-callback', 'FrontController@paytmCallback');


// My Account Change  Password
Route::post('/change-password', 'FrontController@changepassword')->name('change.password');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','AdminController@dashboard');








Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});





