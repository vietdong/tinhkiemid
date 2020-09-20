<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechargeManagerController extends Controller
{
     public function index(){
         return view('client.inside.RechargeManager.rechargemanager');
     }

}
