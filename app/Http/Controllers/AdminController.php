<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index(){

      if(Auth::guard('admin')->check()){
        //  dd(Auth::user()->name);die();
        return view('admin.dashboard');
        }
        return view('admin.login');
    }
    public function login(){
 
        if(Auth::guard('admin')->check()){
          //  dd(Auth::user()->name);die();
            return redirect()->route('admin');
          }
          return view('admin.login');
    }
    public function postLogin(Request $rq){
        if (Auth::guard('admin')->attempt(['email' => $rq->email, 'password' => $rq->password], $rq->remember)) {
    		return redirect()->route('admin');
        }
        return redirect()->route('form.login')->with('errMsg', "Thông tin tài khoản hoặc mật khẩu không đúng!");
    	
    }
    public function logout(){
      Auth::guard('admin')->logout();
      return redirect()->route('form.login');
    }
}
