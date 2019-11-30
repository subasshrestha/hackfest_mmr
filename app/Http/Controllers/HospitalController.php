<?php

namespace App\Http\Controllers;
use App\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->hospital()->exists()){
            return view('hospital.create');
        }
        $reports=auth()->user()->hospital->reports;
        return view('hospital.index')->with('reports',$reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $filePath=[];
        $images=$request->file('images');
        foreach($images as $image){
            $filename= time().'_'.implode('_',explode(' ',$image->getClientOriginalName()));
            $image->move(public_path('images'),$filename);
            $filename='images/'.$filename;
            array_push($filePath,$filename);
        }
        $input['images']= json_encode($filePath);
        $input+=['user_id'=>Auth::user()->id];
        Hospital::create($input);
        return back()->withStatus(_('Information Successfully Uploaded'));
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
        $hospital=Auth::user()->hospital()->find($id);
        if($hospital==null)
        {
            return redirect('/hospital');
        }
        $hospital['images']=json_decode($hospital['images']);
        return view('hospital.show')->with('hospital',$hospital);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital=Auth::user()->hospital()->find($id);
        if($hospital==null)
        {
            return redirect('/hospital');
        }
        $hospital['images']=json_decode($hospital['images']);
        return view('hospital.edit')->with('hospital',$hospital);
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
        //
    }
}
