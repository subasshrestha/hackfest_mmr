
@extends('layouts.app')

@section('content')
    <div class="container">
            {{$hospital->NMCnum}}<br>
            {{$hospital->phone}}<br>
            {{$hospital->hospname}}<br>
    @foreach($hospital->images as $image)
     <img src='/{{$image}}' width='500px'/> 
     @endforeach
     <br>
            <a href='{{ route('hospital.edit',$hospital->id) }}' >Edit</a>
    </div>
          
          
        

@endsection
