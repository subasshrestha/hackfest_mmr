@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href='{{ route('report.create') }}'>Add report</a>
                    <br>
                    
                    <span>Your reports</span>
                    <br>

                    @foreach ($reports as $post)
                    <a href='{{ route('report.show', $post->id) }}'><ol><li> {{$post->title}}</li> <br></ol>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
