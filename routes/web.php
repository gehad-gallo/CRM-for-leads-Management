<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/landing101','App\Http\Controllers\PageController@index')->name('landing101');
Route::get('/landing202','App\Http\Controllers\PageController@index')->name('landing202');
Route::get('/landing303','App\Http\Controllers\PageController@index')->name('landing303');
Route::get('/landing404','App\Http\Controllers\PageController@index')->name('landing404');
Route::get('/landing505','App\Http\Controllers\PageController@index')->name('landing505');
Route::get('/landing606','App\Http\Controllers\PageController@index')->name('landing606');
Route::get('/landing707','App\Http\Controllers\PageController@index')->name('landing707');
Route::get('/landing808','App\Http\Controllers\PageController@index')->name('landing808');
*/

Route::get('/','App\Http\Controllers\PageController@home')->name('home');
Route::post('/','App\Http\Controllers\PageController@insertClient00')->name('insert.client00');

Route::get('/landing/{id}','App\Http\Controllers\PageController@index')->name('landing909');
Route::post('/landing/{id}','App\Http\Controllers\PageController@insertClient')->name('insert.client');


Route::get('/done','App\Http\Controllers\PageController@registerationDone')->name('regestration.done');
Route::get('/privacy-policy','App\Http\Controllers\PageController@privacyPolicy')->name('privacy.policy');
Route::get('/terms-of-use','App\Http\Controllers\PageController@termsOfUse')->name('terms.of.use');


##############################################
################## Admin routes ##############
##############################################

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'guest:web'], function () {
	       
		Route::get('/admin-login','AdminController@login')->name('admin.login');
		Route::post('/admin-login', 'AdminController@getLogin')-> name('admin.login.access');

    });

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {
	       
		//Route::get('/dashboard','AdminController@adminDashboard')->name('dashboard');
		Route::get('/delet-client/{id}','AdminController@deleteClient')->name('delete.client');




		//***///****////////////////
		Route::get('/dashboard','AdminController@getDashboard')->name('dashboard2');
		Route::get('/all-leads','AdminController@getAllLeads')->name('all.leads');
		Route::get('/leads/{id}','AdminController@getLeads')->name('leads');

		Route::get('/trashed-leads','AdminController@gettTrashedLeads')->name('trashed.leads');
		Route::get('/delete-lead/{id}','AdminController@deleteLead')->name('delete.lead');
		Route::get('/activate-lead/{id}','AdminController@activateClient')->name('activate.lead');
		
		Route::get('/edit-lead/{id}','AdminController@editLead')->name('edit.lead');
		Route::post('/edit-lead/{id}','AdminController@saveEditLead')->name('save.edit.lead');

		Route::get('/add-status','AdminController@addStatus')->name('add.status');
		Route::post('/add-status','AdminController@saveAddStatus')->name('save.add.status');




    });


Route::get('/admin-logout', 'App\Http\Controllers\AdminController@gitLogout')->name('admin.logout');