<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $movie = new Movie();
        $movie->username=$request->username;
        $movie->phone=$request->phone;
        $movie->prefered_show_timings=$request->prefered_show_timings;
        $movie->save();
        return response()->json($movie);
    }
    public function show()
    {
        $movie=Movie::all();
        return response()->json($movie);
    }
    public function showId($id)
    {
        $movie=Movie::find($id);
        return response()->json($movie);
    }
    public function update(Request $request, $id)
    {
        $movie=Movie::find($id);
        $movie->username=$request->username;
        $movie->phone=$request->phone;
        $movie->prefered_show_timings=$request->prefered_show_timings;
        $movie->save();
        return response()->json($movie);
    }
    public function destroy(Request $request,$id)
    {
        $movie=Movie::find($id);
        $movie->delete();
        return response()->json($movie);
    }
}
