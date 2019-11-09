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
    return view('admin.Login');
});
Route::post('/admin_login','Admin\AdminController@adminLogin')->name('admin_login');

//Route::get('/','Admin\AdminController@index')->name('index');
Route::group(['namespace' => 'Admin','middleware' => 'auth'], function() {
	
	Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
	Route::get('/users','UserController@index')->name('users');
	Route::get('/add_user','UserController@adduser')->name('add_user');
	Route::post('/saveUser','UserController@saveUser')->name('saveUser');
	Route::get('/listing_alluser','UserController@allUser')->name('listing_alluser');
	Route::get('/edit_user/{id}','UserController@editUser')->name('edit_user');
	Route::post('/updateUser','UserController@updateUser')->name('updateUser');
	Route::get('/list_log','ListController@index')->name('list_log');
        
	Route::get('/add_list','ListController@add_list')->name('add_list');
	Route::post('/add_list','ListController@saveList');
	Route::get('/add_number/{listid}','ListController@add_number')->name('add_number');
	
        Route::post('/saveNumber','ListController@saveNumber')->name('saveNumber');
	
	Route::get('/log_list','ListController@allLists')->name('log_list');
	Route::get('/list_details/{id}','ListController@list_details')->name('list_details');
	Route::get('/lead_listing','ListController@allLeads')->name('lead_listing');

	Route::get('/edit_lead/{id}','ListController@edit_lead')->name('edit_lead');
	Route::post('/updateLead','ListController@updateLead')->name('updateLead');
	
        
        
        //desposions route begin
	Route::get('/list_disposition','dispositionController@disposition')->name('disposition');
	Route::get('/add_disposition','dispositionController@add_disposition')->name('add_disposition');
//	Route::get('/dispositionEdit','ListController@disposition')->name('disposition');
//	Route::get('/dispositionUpdate','ListController@disposition')->name('disposition');

        
        //compaign route begin
        Route::get('list_compaigns','CompaignsController@compaign')->name('compaign');
        Route::get('add_compaigns','CompaignsController@addcompaign')->name('addcompaign');
//        Route::get('add_compaigns','CompaignsController@addcompaign')->name('addcompaign');

        //reports route begin
        Route::get('/list_reports','ReportsController@reports')->name('reports');
//        Route::get('/lead_status','ReportsController@display_report')->name('display_report');

         
});



