<?php

namespace App\Http\Controllers;

use App\Http\Requests\report\StoreReport;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReport $request)
    {
        $input=$request->all();
        $filePath=[];
        $images=$request->file('images');
        foreach ($images as $image){
            $filename= time().'_'.implode('_',explode(' ',$image->getClientOriginalName()));
            $image->move(public_path('images'),$filename);
            $filename='images/'.$filename;
            array_push($filePath,$filename);
        }
        $input['images']= json_encode($filePath);
        $input+=['user_id'=>Auth::user()->id];
        Report::create($input);
        // dd($input);
        // return back()->withStatus(_('Report Successfully Uploaded'));
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report=Auth::user()->reports()->find($id);
        if($report==null)
        {
            return redirect('/home');
        }
        $report['images']=json_decode($report['images']);
        return view('report.show')->with('report',$report);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report=Auth::user()->reports()->find($id);
        if($report==null)
        {
            return redirect('/home');
        }
        $report['images']=json_decode($report['images']);
        return view('report.edit')->with('report',$report);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReport $request, $id)
    {
        // return redirect('/home');
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
