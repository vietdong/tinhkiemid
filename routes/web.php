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
Route::group(['prefix' => '/', 'middleware' => 'toggle_client'], function(){
    Route::get('/', 'App\Http\Controllers\ClientController@index')->name('login');
    Route::post('/login', 'App\Http\Controllers\ClientController@postLogin')->name('post.login');
   
    Route::get('registration', 'App\Http\Controllers\ClientController@registration')->name('registration');
    Route::post('/registration', 'App\Http\Controllers\ClientController@postRegistration')->name('post.registration');

    Route::get('logout', 'App\Http\Controllers\ClientController@logout')->name('logout');
    Route::get('forgotpassword', 'App\Http\Controllers\ClientController@forgotpassword')->name('forgotpassword');
    Route::get('get-info', 'App\Http\Controllers\ClientController@getInfo')->name('get.info');
    Route::get('lost-pass-by-info', 'App\Http\Controllers\ClientController@lostPassByInfo')->name('lost.pass.by.info');
    Route::get('lost-pass-by-mail', 'App\Http\Controllers\ClientController@lostPassByMail')->name('lost.pass.by.mail');
    
    Route::group(['prefix' => 'dashboard', 'middleware' => 'is_client'], function(){
        Route::prefix('recharge-manager')->group(function (){
            Route::get('/','App\Http\Controllers\RechargeManagerController@index')->name('recharge.manager');
        });
        Route::prefix('account-manager')->group(function (){
            Route::get('/','App\Http\Controllers\AccountManagerController@index')->name('account.manager');
            Route::any('change-total-info','App\Http\Controllers\AccountManagerController@changeTotalInfo')->name('change.total.info');
            Route::get('change-pass','App\Http\Controllers\AccountManagerController@changePass')->name('change.pass');
            Route::get('change-pass-2','App\Http\Controllers\AccountManagerController@changePass2')->name('change.pass2');
        });
        Route::prefix('character-manager')->group(function (){
            Route::get('/','App\Http\Controllers\CharacterManagerController@index')->name('character.manager');
        });
    });
});
//admin


Route::get('/admincp', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/login-admin', 'App\Http\Controllers\AdminController@login')->name('form.login');
Route::post('/login-admin', 'App\Http\Controllers\AdminController@postLogin')->name('admin.login');
Route::get('/logout-admin', 'App\Http\Controllers\AdminController@logout')->name('admin.logout');
Route::group(['prefix' => 'dashboard', 'middleware' => 'is_admin'], function(){
    Route::Resource('server','App\Http\Controllers\ServerController');
    Route::Resource('question','App\Http\Controllers\SecretQuestionController');
    Route::Resource('post','App\Http\Controllers\PostController');
    Route::Resource('category','App\Http\Controllers\CategoryController');
    Route::Resource('user','App\Http\Controllers\UserController');
    Route::post('upload-file','App\Http\Controllers\Controller@uploadFile')->name('upload.file');
    Route::get('config','App\Http\Controllers\ConfigController@config')->name('config');
    Route::get('slide','App\Http\Controllers\ConfigController@slide')->name('slide');
    Route::get('link-event','App\Http\Controllers\ConfigController@linkEvent')->name('link.event');
    Route::post('config-save', 'App\Http\Controllers\ConfigController@configSave')->name('config.save');
    
});


//trang home 

Route::group(['prefix' => 'home', 'middleware' => 'toggle_client'], function(){
    Route::get('/', 'App\Http\Controllers\HomeController@index');
});
