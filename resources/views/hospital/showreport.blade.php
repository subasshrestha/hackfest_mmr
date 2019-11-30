
@extends('layouts.app')

@section('content')
    <div class="container">
        {{$report->title}}<br>
        {{$report->description}}<br>
        @foreach($report->images as $image)
            <img src='/{{$image}}' width='500px'/>
        @endforeach

    </div>

    <br>




@endsection
