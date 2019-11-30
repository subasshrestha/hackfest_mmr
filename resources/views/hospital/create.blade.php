@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection

