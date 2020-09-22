<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
class AccountManagerController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index(){
         return view('client.inside.AccountManager.accountmanager');
    }
    public function changeTotalInfo(Request $request){
        
        if($request->all()){
            $list_value = [];
            if($request->email){
                array_push($list_value,'email');
            }
            if($request->cnnd){
                array_push($list_value,'cnnd');
            }
            $input = $request->only($list_value);
            $this->userRepository->update($request->id, $input);
        }
        
        return view('client.inside.AccountManager.changetotalinfo');
   }
   public function changePass(){
         return view('client.inside.AccountManager.changepass');
   }
   public function changePass2(){
    return view('client.inside.AccountManager.changepass2');
}
}
