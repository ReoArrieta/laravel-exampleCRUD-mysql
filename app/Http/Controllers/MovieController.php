<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie as Movie;

class MovieController extends Controller
{
    public function create()
    {
        return view('new');
    }
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();
        return redirect('movie');
    }

    public function index()
    {
        $movie = Movie::get();
        return view('list', ['movies' => $movie]);
    }
    public function show(Request $request)
    {
        $movie = Movie::where('name', 'like', '%' . $request->name . '%')->get();
        return view('list', ['movies' => $movie]);
    }
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('update', ['movie' => $movie]);
    }
    public function update($id, Request $request)
    {
        $movie = Movie::find($id);
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();
        return redirect('movie');
    }
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->back();
    }
}
