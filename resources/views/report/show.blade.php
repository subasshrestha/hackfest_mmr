
@extends('layouts.app')

@section('content')
    <div class="container">
            {{$report->title}}<br>
            {{$report->description}}<br>
    @foreach($report->images as $image)
     <img src='/{{$image}}' width='500px'/> 
     @endforeach
     <br>
            <a href='{{ route('report.edit',$report->id) }}' >Edit</a>
    </div>
          
          
        

@endsection
