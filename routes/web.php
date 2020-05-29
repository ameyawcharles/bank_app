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
use App\Bankaccount;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){

Route::get('/add-bankaccount', 'BankaccountsController@ShowAddBankaccountForm')->name('bankaccounts.add');
Route::post('/add', 'BankaccountsController@addBankaccount')->name('bankaccounts.save');
Route::get('/bankaccounts', 'BankaccountsController@showBankaccounts')->name('bankaccounts');
Route::delete('/bankaccounts/{id}', 'BankaccountsController@destroy')->name('bankaccounts.delete');
Route::get('/bankaccounts/edit/{id}', 'BankaccountsController@showEditForm')->name('bankaccounts.edit');
Route::put('/bankaccounts/update/{id}', 'BankaccountsController@update')->name('bankaccounts.update');


});

