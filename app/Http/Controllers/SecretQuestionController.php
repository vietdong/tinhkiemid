<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SecretQuestionRepository;
class SecretQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $secretQuestionRepository;
    public function __construct(SecretQuestionRepository $secretQuestionRepository)
    {
        $this->secretQuestionRepository = $secretQuestionRepository;
    }
    public function index()
    {
        $question = $this->secretQuestionRepository->getAll();
        return view('admin.question.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.form');
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
            $this->secretQuestionRepository->update($request->id,$request->all());  
        }else{
            $this->secretQuestionRepository->create($request->all());  
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
        $model = $this->secretQuestionRepository->find($id);
        return view('admin.question.form',compact('model'));
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
        $this->secretQuestionRepository->delete($id);
        return redirect()->back();
    }
}
