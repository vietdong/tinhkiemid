<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Repositories\ConfigRepository;
class ConfigController extends Controller
{
    public $list_config;
    public function __construct(ConfigRepository $configRepository)
    {
    
        $this->list_config = $configRepository->getConfig();
    }

    function config(){
    	
        $model = $this->list_config;
    	return view('admin.config.config',compact('model'));
    }
    function configsave(Request $rq){

        foreach ($rq->value as $key => $value) {
             \DB::table('config')->updateOrInsert(
                ['keys' =>  $key]
             );
             \DB::table('config')
             ->where('keys',$key)
             ->update(['value' => $value]);
        
 
      }
      return back()->with('check_config','Lưu thành công !');
    }
    function slide(){
        $model = $this->list_config;
    	return view('admin.config.slide',compact('model'));
    }
    function linkEvent(){
        $model = $this->list_config;
    	return view('admin.config.linh_event',compact('model'));
    }
    function accountManager(){
        $model = $this->list_config;
    	return view('admin.config.accountManager',compact('model'));
    }
    function rechargeManager(){
        $model = $this->list_config;
    	return view('admin.config.rechargeManager',compact('model'));
    }
    function characterManager(){
        $model = $this->list_config;
    	return view('admin.config.characterManager',compact('model'));
    }
}
