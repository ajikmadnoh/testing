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
use App\Http\Requests;
use App\claim;
use Illuminate\Http\Request;


Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::resource('ProfilPengguna','ProfilPenggunaController');
Route::resource('BookKeep','BookKeepController');
Route::resource('StoreKeep','StoreKeepController');
Route::resource('ItemCRUD','ItemCRUDController');
Route::resource('Claim','ClaimController');

Route::get('/', [
  'middleware' => ['auth'],
  'uses' => function (Request $request) {
   $claims = Claim::orderBy('id','DESC')->paginate(5);
        return view('home',compact('claims'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
}]);


Route::get('/listClaim', 'ListController@claim');