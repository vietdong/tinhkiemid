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

Route::get('/', 'App\Http\Controllers\ClientController@index')->name('login');
Route::get('registration', 'App\Http\Controllers\ClientController@registration')->name('registration');
Route::get('forgotpassword', 'App\Http\Controllers\ClientController@forgotpassword')->name('forgotpassword');
Route::get('get-info', 'App\Http\Controllers\ClientController@getInfo')->name('get.info');
Route::get('lost-pass-by-info', 'App\Http\Controllers\ClientController@lostPassByInfo')->name('lost.pass.by.info');
Route::get('lost-pass-by-mail', 'App\Http\Controllers\ClientController@lostPassByMail')->name('lost.pass.by.mail');
Route::get('home','App\Http\Controllers\AccountManagerController@index');

Route::prefix('recharge-manager')->group(function (){
    Route::get('/','App\Http\Controllers\RechargeManagerController@index')->name('recharge.manager');
});
Route::prefix('account-manager')->group(function (){
    Route::get('/','App\Http\Controllers\AccountManagerController@index')->name('account.manager');
    Route::get('change-total-info','App\Http\Controllers\AccountManagerController@changeTotalInfo')->name('change.total.info');
    Route::get('change-pass','App\Http\Controllers\AccountManagerController@changePass')->name('change.pass');
    Route::get('change-pass-2','App\Http\Controllers\AccountManagerController@changePass2')->name('change.pass2');
});
Route::prefix('character-manager')->group(function (){
    Route::get('/','App\Http\Controllers\CharacterManagerController@index')->name('character.manager');
});