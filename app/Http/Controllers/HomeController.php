<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
class HomeController extends Controller
{
    protected $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository  = $postRepository;
    }
    public function index(){
        $post = $this->postRepository->orderBy('id', 'DESC')->first();
        return view('homepage.index',compact('post'));
    }
}
