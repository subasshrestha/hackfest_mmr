
@extends('layouts.app')

@section('content')
    <div class="container">
            {{$report->title}}
            {{$report->description}}
            {{$report->images}}
            {{-- <a href='{{ route('report.edit') }}' ><button value='Edit' ></a> --}}
    </div>
          
          
        

@endsection
