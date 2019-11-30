
@extends('layouts.app')
@section('content')
<div class="table-responsive" style="width: 627px;margin-top: 11px;margin-bottom: 0px;margin-left: 68px;">
<table class="table">
                {{-- <thead>
                    <tr>
                        <th style="background-color: #8dbfd5;">&nbsp;User Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&nbsp;Name:</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Email:</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </tbody> --}}
            </table>
        </div>
        <div></div>
        <div class="table-responsive" style="width: 627px;margin-top: 11px;margin-bottom: 0px;margin-left: 68px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="background-color: #8dbfd5;">Report Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$report->title}}</td>
                    </tr>
                    <tr>
                        <td style="height: 102px;">{{$report->description}}</td>
                    </tr>
                    <tr>@foreach($report->images as $image)
                                <img src='/{{$image}}' width='500px'/> 
                                @endforeach</tr>
                </tbody>
            </table>
            <a href='{{ route('report.edit',$report->id)}}' ><button class="btn btn-primary" type="submit">Edit</button></a>


    
          
        

@endsection
