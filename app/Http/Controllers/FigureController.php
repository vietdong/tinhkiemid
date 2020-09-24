<?php

namespace App\Http\Controllers;

use App\Models\Figure;
use Illuminate\Http\Request;
use App\Repositories\FigureRepository;
class FigureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $figureRepository;
    public function __construct(FigureRepository $figureRepository)
    {
        $this->figureRepository = $figureRepository;
    }
    public function index()
    {
        $figure = $this->figureRepository->getAll();
        return view('admin.figure.index',compact('figure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.figure.form');
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
            $this->figureRepository->update($request->id,$request->all());  
        }else{
            $this->figureRepository->create($request->all());  
        }
        return redirect()->back()->with('check','Lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Figure  $figure
     * @return \Illuminate\Http\Response
     */
    public function show(Figure $figure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Figure  $figure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = $this->figureRepository->find($id);
        return view('admin.figure.form',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Figure  $figure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Figure $figure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Figure  $figure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Figure $figure)
    {
        $this->figureRepository->delete($id);
        return redirect()->back();
    }
}
