<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ConfigRepository;
class CharacterManagerController extends Controller
{
    protected $configRepository;
    public function __construct(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }
    
    public function index(){
        if($this->configRepository->getConfig()['character']['value'] == 0){
            return view('client.inside.maintenance');
         }
        return view('client.inside.CharacterManager.charactermanager');
    }
}
