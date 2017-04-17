<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/welcome', 'ListController@show');
Route::get('Claim/{Claim}', 
[ 'as' => 'Claim', 'uses' => 'ClaimController@claim']) ;
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);
Route::get('/BookKeep', 'BookKeepController@index');
Route::resource('ItemCRUD','ItemCRUDController');
Route::resource('Claim','ClaimController');

Route::get('/', [
  'middleware' => ['auth'],
  'uses' => function () {
   return view('home');
}]);


