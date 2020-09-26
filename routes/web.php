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
    Route::any('lost-pass-by-info', 'App\Http\Controllers\ClientController@lostPassByInfo')->name('lost.pass.by.info');
    Route::any('lost-pass-by-mail', 'App\Http\Controllers\ClientController@lostPassByMail')->name('lost.pass.by.mail');
    
    Route::group(['prefix' => 'dashboard', 'middleware' => 'is_client'], function(){
        Route::prefix('recharge-manager')->group(function (){
            Route::get('/','App\Http\Controllers\RechargeManagerController@index')->name('recharge.manager');
            Route::get('ZaloPay','App\Http\Controllers\RechargeManagerController@zaLoPay')->name('zalo.pay');
        });
        Route::prefix('account-manager')->group(function (){
            Route::get('/','App\Http\Controllers\AccountManagerController@index')->name('account.manager');
            Route::any('change-total-info','App\Http\Controllers\AccountManagerController@changeTotalInfo')->name('change.total.info');
            Route::any('change-pass','App\Http\Controllers\AccountManagerController@changePass')->name('change.pass');
            Route::any('change-pass-2','App\Http\Controllers\AccountManagerController@changePass2')->name('change.pass2');
            Route::any('change-phone','App\Http\Controllers\AccountManagerController@changePhone')->name('change.phone');
            Route::any('lost-phone','App\Http\Controllers\AccountManagerController@lostPhone')->name('lost.phone');
            Route::any('RegisterGoogleAuth','App\Http\Controllers\AccountManagerController@registerGoogleAuth')->name('register.google.auth');
            Route::any('ChangeEmail','App\Http\Controllers\AccountManagerController@changeEmail')->name('change.email');
            Route::any('ChangeQuestion','App\Http\Controllers\AccountManagerController@changeQuestion')->name('change.question');
            Route::any('ChangeCMT','App\Http\Controllers\AccountManagerController@changeCMT')->name('change.CMT');
            Route::any('ShowInfo','App\Http\Controllers\AccountManagerController@showInfo')->name('show.info');
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
    Route::Resource('figure','App\Http\Controllers\FigureController');
    Route::post('upload-file','App\Http\Controllers\Controller@uploadFile')->name('upload.file');
    Route::get('config','App\Http\Controllers\ConfigController@config')->name('config');
    Route::get('slide','App\Http\Controllers\ConfigController@slide')->name('slide');
    Route::get('link-event','App\Http\Controllers\ConfigController@linkEvent')->name('link.event');
    Route::get('config-account-manager','App\Http\Controllers\ConfigController@accountManager')->name('config.account.manager');
    Route::get('config-recharge-manager','App\Http\Controllers\ConfigController@rechargeManager')->name('config.recharge.manager');
    Route::get('config-character-manager','App\Http\Controllers\ConfigController@characterManager')->name('config.character.manager');
    Route::post('config-save', 'App\Http\Controllers\ConfigController@configSave')->name('config.save');
    
});


//trang home 

Route::group(['prefix' => 'home', 'middleware' => 'toggle_client'], function(){
    Route::get('/', 'App\Http\Controllers\HomeController@index');
});
