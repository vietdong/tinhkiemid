<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountManagerController extends Controller
{
    public function index(){
         return view('client.inside.AccountManager.accountmanager');
    }
    public function changeTotalInfo(){
        return view('client.inside.AccountManager.changetotalinfo');
   }
   public function changePass(){
         return view('client.inside.AccountManager.changepass');
   }
   public function changePass2(){
    return view('client.inside.AccountManager.changepass2');
}
}
