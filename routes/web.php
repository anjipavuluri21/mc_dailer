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
    return view('admin.login');
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
	
        
        Route::get('/edit_list/{id}','ListController@edit_list')->name('edit_list');
	Route::post('/updateList','ListController@updateList')->name('updateList');
        
        
        //desposions route begin
	Route::get('/list_disposition','DispositionController@disposition')->name('disposition');
	Route::get('/dispositionList','DispositionController@dispositionList')->name('dispositionList');
        
        
	Route::get('/add_disposition','DispositionController@add_disposition')->name('add_disposition');
        Route::post('/saveDispositio','DispositionController@saveDisposition')->name('saveDisposition');
        
        Route::get('/edit_disposition/{id}','DispositionController@edit_disposition')->name('edit_disposition');
        Route::post('/updateDisposition','DispositionController@updateDisposition')->name('updateDisposition');
	Route::get('/delete_disposition/{id}','DispositionController@delete_disposition')->name('deleteDisposition');
        //desposions route End

        
        //compaign route begin
        //list
        Route::get('list_compaigns','CompaignsController@compaign')->name('compaign');
        Route::get('/compaignList','CompaignsController@compaignList')->name('compaignList');
        
        Route::get('/add_compaigns','CompaignsController@add_compaign')->name('add_compaigns');
        Route::post('/saveCompaigns','CompaignsController@saveCompaigns')->name('saveCompaigns');
        
         Route::get('/edit_compaigns/{id}','CompaignsController@edit_compaigns')->name('edit_compaigns');
         Route::post('/updateCompaign','CompaignsController@updateCompaign')->name('updateCompaign');

         
         
        //reports route begins
        Route::get('/list_reports','ReportsController@reports')->name('reports');
        Route::get('/lead_status','ReportsController@lead_status_report')->name('lead_status');
        Route::get('/lead_status_list','ReportsController@lead_status_list')->name('lead_status_list');
        
        
        Route::get('/dialstatus','ReportsController@dialstatus_report')->name('dialstatus');
        Route::get('/agent_performance','ReportsController@agent_report')->name('agent_performance');
        Route::get('/download','ReportsController@download_report')->name('download');


       
         
});



