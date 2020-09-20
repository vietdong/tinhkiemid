<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.external.login');
    }
    public function registration(){
        return view('client.external.registration');
    }
    public function forgotpassword(){
        return view('client.external.forgotpassword');
    }
    public function getInfo(){
        return view('client.external.getinfo');
    }
    public function lostPassByInfo(){
        return view('client.external.lostpassbyinfo');
    }
    public function lostPassByMail(){
        return view('client.external.lostpassbymail');
    }
}
