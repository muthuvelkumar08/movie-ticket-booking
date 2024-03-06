@extends('layouts.app')
@section('main')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">View Ticket</h3>
                        <a href="{{route('showMovie')}}"class="btn btn-warning float-end">Back</a>
                    </div>
                    <div class="card-body">
                            <a href="{{route('viewTicket',["timing"=>"11.00 A.M"])}}" class="btn btn-primary mb-2 mt-4" style="margin-left: 300px;" name="book">11.00 A.M</a>
                            <a href="{{route('viewTicket',["timing"=>"2.30 P.M"])}}" class="btn btn-primary mb-2 mt-4" style="margin-left: 300px;" name="book">2.30 P.M</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
