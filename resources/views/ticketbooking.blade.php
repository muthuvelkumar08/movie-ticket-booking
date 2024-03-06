@extends('layouts.app')
@section('main')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Book Your Ticket</h3>
                        <a href="{{route('showMovie')}}" class="btn btn-success float-end">Back</a>
                        @if(session('status'))
                    <div class="alert alert-success alert-dimissible fade show" role="alert">
                        <strong>Hey Buddy!.</strong>{{session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    </div>
                    <div class="card-body">
                        <form action="{{route('saveTicket')}}" method="post">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-2">
                                    <label class="mb-2">UserName</label>
                                    <input type="text" name="username" class="form-control" value="{{old('username')}}">
                                    @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-2">
                                    <label class="mb-2">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" value="{{old('phone')}}">
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 mb-2">
                                    <label class="mb-2">Show Timings</label>
                                    <select name="show" class="form-control">
                                        <option value="">-- Select The Timing --</option>
                                        <option value="11.00 A.M">11.00 A.M</option>
                                        <option value="2.30 P.M">2.30 P.M</option>
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6 mb-2">
                                    <input type="submit" name="book" value="Book" class="btn btn-primary float-end">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
