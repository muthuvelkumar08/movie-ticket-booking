@extends('layouts.app')
@section('main')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Book Your Ticket</h3>
                        <a href="{{route('viewTiming')}}"class="btn btn-success float-end">View Ticket</a>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row justify-content-center">
                                <img src="{{asset('movie.jpg')}}" alt="">
                            </div>
                            <a href="{{route('ticketBooking')}}" class="btn btn-primary mb-2 mt-4" style="margin-left: 300px;" name="book">Book</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
