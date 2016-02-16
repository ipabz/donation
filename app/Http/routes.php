<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DonationController@index');

Route::get('/charge', 'DonationController@chargeTest');

Route::group(['prefix' => 'donation'], function() {
    Route::post('/submit', ['as' => 'donation.submit', 'uses' => 'DonationController@postSubmitDonation']);

    Route::get('/thankyou', ['as' => 'donation.thankyou', 'uses' => 'DonationController@thankyou']);
});


Route::get('/recur', 'DonationController@recurringDonations');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
