@extends('layouts.app')
@section('main')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">View Ticket</h3>
                        <a href="{{route('viewTiming')}}"class="btn btn-warning float-end">Back</a>
                    </div>
                    @if(session('status'))
                    <div class="alert alert-success alert-dimissible fade show">
                        <strong>Hey Buddy!.</strong>{{session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>SI.No</th>
                                <th>Movie Name</th>
                                <th>Username</th>
                                <th>Phone Number</th>
                                <th>Show Timings</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($viewticket as $viewtickets )

                                <tr>
                                    <td>{{$viewtickets->id}}</td>
                                    <td>{{$viewtickets->moviename}}</td>
                                    <td>{{$viewtickets->username}}</td>
                                    <td>{{$viewtickets->phone}}</td>
                                    <td>{{$viewtickets->prefered_show_timings}}</td>
                                    <td>
                                        <a href="{{route('editTicket',["id"=>$viewtickets->id])}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('deleteTicket',["id"=>$viewtickets->id])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
