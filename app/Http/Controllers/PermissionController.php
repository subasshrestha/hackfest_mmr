<?php

namespace App\Http\Controllers;

use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $email=$request['email'];
        $doctor=User::where('email',$email)->get();
        if($doctor  == null){
            return back()->withError(_('Doctor with the given email not found'));
        }
        $hospital=$doctor[0]->hospital;
        $data=[
            'hospital_id'=>$hospital->id,
            'report_id'=>(int)$request['id'],
        ];
        //dd($data);
        Permission::create($data);
        return back()->withStatus(_('permission given successfully'));
    }
    public function delete(){

    }
}
