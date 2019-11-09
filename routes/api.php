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

Route::group(['namespace' => 'Api','prefix' => 'user'], function(){ 
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('data', 'UserController@data');

Route::post('registerNew', 'UserController@registerNew');
Route::get('test', 'UserController@test');
Route::get('test','Usercontoller@test');
Route::get('list', 'UserController@userlist');
Route::get('profile/{userId?}', 'UserController@profile');
//Route::get('all','UserController@all_list');


});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
