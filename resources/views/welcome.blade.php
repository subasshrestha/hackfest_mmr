@extends('layouts.app')


@section('content')
<link href="{{ asset('css/styles1.min.css') }}" rel="stylesheet">
        <div class="flex-center position-ref full-height">
            <div class="content">
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    
                   <div class="container-fluid">
                       <img src="/images/slider1.jpg">
                    <div class="features-clean">
                        <div class="container">
                            <div class="intro">
                                <h2 class="text-center"></h2>
                            </div>
                            <div class="row features">
                                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                                    <h3 class="name">Works everywhere</h3>
                                    <p class="description">Can be used by any persnonnel from anywhere.</p>
                                </div>
                                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                                    <h3 class="name">Always available</h3>
                                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                                </div>
                                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                                    <h3 class="name">Customizable</h3>
                                    <p class="description">Easy to costumize data.Datas can be added edited and removed</p>
                                </div>
                                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                                    <h3 class="name">Organic</h3>
                                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                                </div>
                                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                                    <h3 class="name">Fast</h3>
                                    <p class="description">&nbsp;</p>
                                </div>
                                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                                    <h3 class="name">Mobile-first</h3>
                                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endsection