<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ServerRepository;
class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $serverRepository;
    public function __construct(ServerRepository $serverRepository)
    {
        $this->serverRepository = $serverRepository;
    }
    public function index()
    {
        $server = $this->serverRepository->getAll();
        return view('admin.server.index',compact('server'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.server.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->id){
            $this->serverRepository->update($request->id,$request->all());  
        }else{
            $this->serverRepository->create($request->all());  
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
        $model = $this->serverRepository->find($id);
        return view('admin.server.form',compact('model'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->serverRepository->delete($id);
        return redirect()->back();
    }
}
