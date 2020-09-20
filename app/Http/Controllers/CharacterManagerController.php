<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacterManagerController extends Controller
{
    public function index(){
        return view('client.inside.CharacterManager.charactermanager');
    }
}
