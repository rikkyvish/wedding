@extends('layouts.main')
@section('content')
    <!-- Page Heading -->
    <div class="align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Comment</h1>

        
    </div>
    <div class="float-right">
        @if (session()->has('message'))
            <div class="alert alert-success" >
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All users
                <a href="" class="float-right" ></a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                       @foreach ($comments as $comment)
                       <tr>
                            <td>{{ $comment->name }}</td>
                            <td>{{$comment->comment}}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>
                                
                                <form method="post" action='/accept/{{$comment->id }}' >
                                    @csrf
                                    
                                    @if($comment->approved ==  0)
                                    <button class="btn btn-sm btn-primary"><i class="fa fa-unlock text-white" aria-hidden="true"></i></button>
                                        
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card ">
            
            <div class="card-body">

                <form method="post" action='/livekey/1' >
                    @csrf
                    
                    
                    <div class="form-group">
                        <label>Enter Live Key</label>
                        <input class="fom-control" name="livekey" placeholder="https://youtu.be/I9Y32hifJxc" />
                        <input type="submit" class="btn btn-success" value="Change Live Stream key"/>
                    </div>
                        
                    
                </form>
                
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div id="app">
            <example-component></example-component>
        </div>
    </div>
    
    
@endsection