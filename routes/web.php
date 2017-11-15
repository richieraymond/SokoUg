<?php
use App\Region;
use App\District;
use App\Subcategory;
use Illuminate\Support\Facades\Input;
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

Route::get('/','GeneralController@index');
Route::resource('wishlist','WishListController')->middleware('auth');
Route::resource('cart','CartController')->middleware('auth');
Route::get('cart/destroy/{id}','CartController@destroy')->middleware('auth');
Route::resource('products', 'ProductController')->middleware('auth');
Route::Resource('purchases','PurchaseController')->middleware('auth');
Route::Resource('subscriptions','SubscriptionController')->middleware('auth');
Route::Resource('profile','ProfileController')->middleware('auth');
Route::Resource('accountsettings','AccountController')->middleware('auth');
Route::resource('wholesale','WholeSaleController')->middleware('auth');
Route::resource('adverts', 'Adverts')->middleware('auth');
Route::resource('orders', 'MyOrders')->middleware('auth');
Route::resource('checkout','CheckOut')->middleware('auth');
Route::post('/api/category/{id}', 'PageController@getSubcategory');
Route::get('approvedorders','MyOrders@approvedOrders')->middleware('auth');
Route::get('pendingorders','MyOrders@pendingOrders')->middleware('auth');
Route::get('canceledorders','MyOrders@canceledOrders')->middleware('auth');
Auth::routes();
Route::get('product/productdetails/{id}','GeneralController@productdetails');
Route::get('product/update/{id}','ProductController@edit');
Route::get('products/categories/{id}','GeneralController@categorydetails');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('promotions','PromotionPackageController')->middleware('auth');
Route::resource('profile/','userProfile')->middleware('auth');
Route::get('/ajax-category',function(){
    $category_id=Input::get('category_id');
    $subcategories=Subcategory::where('category_id','=',$category_id)->get();
    return Response::json($subcategories);
});
