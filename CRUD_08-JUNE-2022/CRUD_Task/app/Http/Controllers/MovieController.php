<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return latest five movies
       // $movies = Movie::latest()->paginate(5);
        $movies = Movie::all();

        /*compact() function is used to convert given variable to to
        array in which the key of the array will be the name of the
         variable and the value of the array will be the value of the
         variable.*/
        return view('movies.index',compact('movies'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the input
        $request->validate([
            
        'movie_name'=> 'required',
        'movie_gener'=> 'required',
        'movie_imag_name'=> 'required',
        'movie_imag_path'=> 'required',
        ]);

        //Create a new movie in the database
        //$request->all(): Retreiving all input data
        Movie::create($request->all());

        //Redirect the user and send friendly message
        return redirect()->route('movies.index')
                        ->with('success','Movie created successfully.');
    }

    /**
     * Display the specified resource (with inputted ID from the url).
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'movie_name'=> 'required',
            'movie_gener'=> 'required',
            'movie_imag_name'=> 'required',
            'movie_imag_path'=> 'required',
            
        ]);

        //Create a new movie in the database
        $movie->update($request->all());

        return redirect()->route('movies.index')
                        ->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //Delete the movie
        $movie->delete();

        //Redirect the user and display success message
        return redirect()->route('movies.index')
                        ->with('success','Movie deleted successfully');
    }
}