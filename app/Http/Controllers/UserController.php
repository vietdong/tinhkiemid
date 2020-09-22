<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\ServerRepository;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userRepository;
    protected $serverRepository;
    public function __construct(UserRepository $userRepository,ServerRepository $serverRepository)
    {
        $this->userRepository = $userRepository;
        $this->serverRepository = $serverRepository;
    }
    public function index()
    {
        $user = $this->userRepository->getAll();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $server = $this->serverRepository->getAll();
        return view('admin.user.form',compact('server'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'name' => $request->name,
            'server_id' => $request->server_id,
            'password' => bcrypt($request->password),
            'password2' => bcrypt($request->password2),
            'email' => $request->email,
            'secret_question_id' => $request->secret_question_id,
            'answer' => $request->answer,
            'phone' => $request->phone,


        ];
        if($request->id){
            $this->userRepository->update($request->id,$request->all());  
        }else{
            $this->userRepository->create($request->all());  
        }
        return redirect()->back()->with('check','Lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $server = $this->serverRepository->getAll();
        $model = $this->userRepository->find($id);
        return view('admin.user.form',compact('model','server'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect()->back();
    }
}
