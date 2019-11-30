@extends('layouts.app')

@section('content')
    <div class="container">
        
            
                

                   
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="contact-clean">
                                <form method="post">
                                    <h2 class="text-center">Report</h2>
                                    <div class="form-group border-dark"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                                    <div class="form-group"><textarea class="form-control" type="text" name="description" placeholder="Description"></textarea></div>
                                    <div class="form-group"><div class="custom-file">
                          <input class="form control" type="file" id="customFile">
                                </div>
                        </div>
                                    <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
                                </form>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
                    </div>
          
          
        

@endsection
