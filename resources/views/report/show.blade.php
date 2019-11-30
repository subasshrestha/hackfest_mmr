
@extends('layouts.app')

@section('content')
    <div class="container">
            {{$report->title}}<br>
            {{$report->description}}<br>
    @foreach($report->images as $image)
     <img src='/{{$image}}' width='500px'/> 
     @endforeach
     <br>
            <a href='{{ route('report.edit',$report->id)}}' >Edit</a>
    </div>

    <br>
    <form method="POST" action='{{ route('givepermission.store')}}'>
        @csrf
        <input type="text" name="email" id="email"><br>
        <input type="hidden" name="id" id="id" value="{{$report->id}}"><br>
        <input type="submit" value="Give Permission">
    </form>
          
          
        

@endsection
