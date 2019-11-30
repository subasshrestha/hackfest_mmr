@extends('layouts.app')

@section('content')
<div class="container">
                        
        <div class="form-group">
                <h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Patient Records</h1>
            </div><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <h4><a href='{{ route('report.create') }}'><button class="btn btn-primary" type="submit">Add Reports</button></a></h4>
                <br>
                
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Entry date </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($reports as $post) 
                    
                        
                  <tr>
                  <td>{{$post->id}}</td>
                  <td><a href='{{ route('report.show', $post->id) }}'>{{$post->title}}</td>
                    
                  <td>{{$post->created_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        </div>     
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
