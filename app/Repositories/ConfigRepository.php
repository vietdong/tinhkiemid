<?php
namespace App\Repositories;
use App\Repositories\ModelRepository;
use App\Models\Config;
class ConfigRepository extends ModelRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Config::class;
    }
    public function getConfig(){
        $key = Config::all();
    	$model = [];
    	foreach ($key as $key => $value) {
    		$model[$value->keys]['key'] =$value->keys;
    		$model[$value->keys]['value'] =$value->value;
    	}
        return $model;
    }


}