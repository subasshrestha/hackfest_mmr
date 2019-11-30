<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create(){
        
        return view('report.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'images' => 'required',
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('report.show')
                        ->with('success','Product created successfully.');
    }
    public function show($id){
        
        return view('report.show');
    }

}
