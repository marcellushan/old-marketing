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

Route::get('/', function () {
//    return view('welcome');
//    echo "test";
    Mail::to('mhannah@highlands.edu')->send(new \App\Mail\MarketingRequest());
});


Route::resource('clients', 'ClientsController');
Route::get('clients/thank_you/{id}', 'ClientsController@thankYou');
Route::resource('press_release', 'PressReleaseController');
Route::get('press_release/admin/{id}', 'PressReleaseController@admin');
Route::get('press_release/return_show/{id}', 'PressReleaseController@returnShow');
Route::resource('design_printing', 'DesignPrintingController');
Route::get('design_printing/admin/{id}', 'DesignPrintingController@admin');
Route::get('design_printing/return_show/{id}', 'DesignPrintingController@returnShow');
Route::resource('photography', 'PhotoController');
Route::get('photography/admin/{id}', 'PhotoController@admin');
Route::get('photography/return_show/{id}', 'PhotoController@returnShow');
Route::resource('videography', 'VideoController');
Route::get('videography/admin/{id}', 'VideoController@admin');
Route::get('videography/return_show/{id}', 'VideoController@returnShow');
Route::resource('presentation', 'PresentationController');
Route::get('presentation/admin/{id}', 'PresentationController@admin');
Route::get('presentation/return_show/{id}', 'PresentationController@returnShow');
Route::resource('social_media', 'SocialMediaController');
Route::get('social_media/admin/{id}', 'SocialMediaController@admin');
Route::get('social_media/return_show/{id}', 'SocialMediaController@returnShow');
Route::resource('paid_advertising', 'PaidAdvertisingController');
Route::get('paid_advertising/admin/{id}', 'PaidAdvertisingController@admin');
Route::get('paid_advertising/return_show/{id}', 'PaidAdvertisingController@returnShow');
Route::resource('event', 'EventController');
Route::get('event/admin/{id}', 'EventController@admin');
Route::get('event/return_show/{id}', 'EventController@returnShow');
Route::resource('admin', 'AdminController');

Route::get('service', 'ServiceController@index');
Route::get('service/{name}', 'ServiceController@serviceName');
Route::get('by_service', 'ServiceController@byService');
Route::get('testmail', 'ServiceController@testMail');
Route::get('services_list', 'ServiceController@servicesList');

Route::post('update', 'CommentsController@update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('paid_advertising', 'AdminController');
