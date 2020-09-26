<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ConfigRepository;
class RechargeManagerController extends Controller
{
    protected $configRepository;
    protected $pathForder;
    public function __construct(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
        $this->pathForder = 'client.inside.RechargeManager'; 
    }
     public function index(){
        if($this->configRepository->getConfig()['recharge']['value'] == 0){
            return view('client.inside.maintenance');
         }
         return view($this->pathForder.'.rechargemanager');
     }
     public function zaLoPay(){
         return view($this->pathForder.'.ZaloPay');
     }

}
