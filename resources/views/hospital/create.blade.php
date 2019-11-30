@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hospital</div>

                    <div class="card-body">

                        report index page.
                            <form action="{{route('hospital.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="NMCnum" id="NMCnum" placeholder="NMCnum">
                                <input type="number" name="phone" id="phone" placeholder="phone">
                                <input type="text" name="hospname" id="hospname" placeholder="hospital name">
                                <input type="file" name="images[]" multiple="true" id="images">
                                <input type="submit" value="upload">
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>-->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
     <div  class="contact-clean">
        
        <form action="{{route('hospital.store')}}" method="post" enctype="multipart/form-data">
            <h2 class="text-center">HOSPITAL</h2>
            @csrf
            <!--<div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input type="text" class="form-control" name="address" placeholder="Address"/></div>
            <div class="form-group"><input type="tel" class="form-control" name="telephone" placeholder="Phone Number" /></div>
            <div class="form-group"><input class="form-control" type="number" name="pan" placeholder="PAN Number" /></div> -->
            <div class="form-group"><input class="form-control" type="text" name="NMCnum" id="NMCnum" placeholder="NMC Number"></div>
            <div class="form-group"><input class="form-control" type="number" name="phone" id="phone" placeholder="Phone Number"></div>
            <div class="form-group"><input class="form-control" type="text" name="hospname" id="hospname" placeholder="Hospital Name"></div>
            
            <div class="form-group"><label style="color: rgb(244,10,10);">*Verified documents</label><input type="file" name="images[]" multiple="true" id="images" style="padding-top: -18px;padding-bottom: 1px;"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
@endsection

