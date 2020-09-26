<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function index()
    {
        $post = $this->postRepository->getAll();
        return view('admin.post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $fileName="";
            if ($request->hasFile('image')) {
        
                $file = $request->image;
                $fileName= time().$file->getClientOriginalName();
                $file->move('uploads',$fileName);
            }else{
                if($request->id){
                    $fileName =  $this->postRepository->find($request->id)->image;
                }else{
                    $fileName = '';
                }
            }
            // if($rq->hasFile('image')) {
            //     foreach($rq->file('image') as $image) {
            //         $filenameWithExt = $image->getClientOriginalName();
            //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //         $extension = $image->getClientOriginalExtension();
             
            //         $fileNameToStore = $filename.'_'.time().'.'.$extension;
                    
            //         $image->storeAs('public/image', $fileNameToStore);
             
            //         $image = new ProductImages([
            //             'content_id' => $model->id,
            //             'path' => $fileNameToStore,
            //         ]);
                    
            //         $image->save();
            //     }
            // }
            $input = [
                'title'=> $request->title,
                'slug' => $this->postRepository->slug($request->title),
                'cate_id' => $request->cate_id,
                'active'=> $request ->active,
                'display_time' => $request->display_time,
                'content' => $request->content,
                'image' => $fileName

            ];
        if($request->id){
            $this->postRepository->update($request->id,$input);  
        }else{
            
            $this->postRepository->create($input);  
        }
        return redirect()->back()->with('check','Lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = $this->postRepository->find($id);
        return view('admin.post.form',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->postRepository->delete($id);
        return redirect()->back();
    }
}
