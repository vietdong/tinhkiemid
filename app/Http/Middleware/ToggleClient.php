<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Config;
class ToggleClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $key = Config::all();
        foreach ($key as $key => $value) {
          $config[$value->keys]['key'] =$value->keys;
          $config[$value->keys]['value'] =$value->value;
        }
       if($config['toggle_website']['value'] == 0){
        //    return redirect('maintenance');
           return response()->view('admin.maintenance');
       }
        return $next($request);
    }
}
