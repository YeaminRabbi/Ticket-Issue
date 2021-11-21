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
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);
Route::get('/home', 'AdminController@index')->name('home')->middleware('auth', 'verified');

Route::get('/user-information', 'AdminController@userinformation')->name('userInformation')->middleware('auth', 'verified');
Route::post('/user-register', 'AdminController@registeruser')->name('userRegister')->middleware('auth', 'verified');
Route::get('/user-ticket-issue', 'AdminController@ticketIssue')->name('ticketIssue')->middleware('auth', 'verified');
Route::get('/airlines', 'AdminController@airlines')->name('airlines')->middleware('auth', 'verified');
Route::post('/create-airlines', 'AdminController@createAirlines')->name('createAirlines')->middleware('auth', 'verified');
Route::get('/delete-airlines/{id}', 'AdminController@airline_delete')->name('airline_delete')->middleware('auth', 'verified');
Route::post('/ticket-issue', 'AdminController@ticket_info')->name('ticket_info')->middleware('auth', 'verified');
Route::get('/ticket-records', 'AdminController@ticketRecords')->name('ticketRecords')->middleware('auth', 'verified');
Route::get('/ticket-details/{id}', 'AdminController@ticket_details')->name('ticket_details')->middleware('auth', 'verified');
