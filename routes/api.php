<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::any('/', function () {
    return 'Agrosearch API';
});
Route::group(['middleware' => 'auth:api'], function(){
    // Get Details of current user
    Route::post('details', 'API\UserController@details');
    // Get Listings posted by current user
    Route::post('get_listings', 'ListingController@get_listings');
    // Get Listings posted by everyone
    Route::post('get_all_listings', 'ListingController@get_all_listings');
    // Add Listing
    Route::post('upload_listing', 'ListingController@upload_listing');
    // Get Orders list of an user
    Route::post('order_list', 'OrderController@order_list');
    // Get Order Details
    Route::post('order_details', 'OrderController@order_details');
    // Place Order
    Route::post('place_order', 'OrderController@place_order');
});