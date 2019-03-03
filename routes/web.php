<?php

use GuzzleHttp\Middleware;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/listing/{id}', 'ListingController@web_details')->name('listing_detail');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//Development only routes
Route::get('artisan/clear-cache', 'artisanWeb@clearCache')->name('clear-cache');
Route::get('artisan/migrate', 'artisanWeb@migrate')->name('migrate');
Route::get('artisan/passport', 'artisanWeb@passport')->name('passport');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/post-listing','DashboardController@post_listing')->name('post_listing');
    Route::post('/post-listing','ListingController@add_listing');
    Route::get('/get-views/{id}', 'ListingController@get_views'); // Ajax route
    Route::get('/profile','ProfileController@show')->name('profile');
    Route::post('/profile','ProfileController@update');

    Route::get('/myads', 'ListingController@show_my_ads')->name('myads');
    Route::get('/edit/{id}', 'ListingController@edit_listing_show');
    Route::post('/edit/{id}', 'ListingController@edit_listing');
    Route::get('/delete/{id}', 'ListingController@delete_listing');
});