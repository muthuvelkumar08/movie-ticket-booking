<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function showMovie()
    {
        return view('movie');
    }
    public function ticketBooking()
    {
        return view('ticketbooking');
    }
    public function saveTicket(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'username'=>'required|min:3|max:25|string',
            'phone'=>'required|digits:10|numeric',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $movie=new Movie();
        $movie->username=$request->username;
        $movie->phone=$request->phone;
        $movie->prefered_show_timings=$request->show;
        $movie->save();

        return redirect()->back()->with('status',' Booking Successfully');
    }
    public function viewTiming()
    {
        return view('viewtiming');
    }
    public function viewTicket($timing)
    {
        $viewticket=Movie::where('prefered_show_timings', $timing)->get();;
        return view('viewticket',compact('viewticket'));
    }
    public function editTicket($id)
    {
        $movie=Movie::findOrFail($id);
        return view('editticket',compact('movie'));
    }
    public function updateTicket(Request $request,$id)
    {
        $validator=Validator::make($request->all(),[
            'username'=>'required|min:3|max:25|string',
            'phone'=>'required|digits:10|numeric',
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $movie=Movie::where('id',$id)->first();
        $movie->username=$request->username;
        $movie->phone=$request->phone;
        $movie->prefered_show_timings=$request->show;
        $movie->save();
        $movie->save();

        return redirect()->back()->with('status',' Timing  Updated Successfully');
    }
    public function deleteTicket($id)
    {
        $movie=Movie::findOrFail($id);
        $movie->delete();
        return redirect()->back()->with('status',' Deleted Successfully');
    }
}
