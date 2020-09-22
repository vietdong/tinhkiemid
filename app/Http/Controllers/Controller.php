<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function uploadFile(Request $request){
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);
    
        if ($request->hasFile('file')) {
            $file = $request->file;
            $imageName = \Str::uuid() . '.jpeg';
            $path = Storage::disk('photo_library')->put('tinymce_image', $file);
            // return URL::to('/').'/'.$path ;
            return json_encode(['location' => URL::to('/').'/'.$path]);
        }
    }
}
