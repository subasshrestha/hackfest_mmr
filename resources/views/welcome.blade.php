@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                    
                    <section id="carousel">
                        <div class="carousel slide" data-ride="carousel" id="carousel-1">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="jumbotron pulse animated hero-nature carousel-hero" style="height: 268px;">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="jumbotron pulse animated hero-photography carousel-hero">
                                        <h1 class="hero-title">Hero Photography</h1>
                                        <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="jumbotron pulse animated hero-technology carousel-hero"></div>
                                </div>
                            </div>
                            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                            <ol
                                class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2"></li>
                                </ol>
                        </div>
                    </section>
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