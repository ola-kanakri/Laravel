<?php

namespace App\Http\Controllers;

use App\Models\Netflix;
use Illuminate\Http\Request;


class NetflixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $netflixes = Netflix::all();
        return view('index',compact('netflixes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('netflixes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request -> validate([
            'id'=> 'required',
            'movie_name' => 'required',
            
        ]);

        $show = Netflix::create($validateData);
        return redirect ('/netflixes')->route('netflixes.index')->with('success','Movie is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Netflix  $netflix
     * @return \Illuminate\Http\Response
     */
    public function show(Netflix $netflix)
    {
        return view ('netflixes.show',compact('netflix'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Netflix  $netflix
     * @return \Illuminate\Http\Response
     */
    public function edit(Netflix $netflix)
    {
        return view ('netflixes.edit',compact('netflix'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Netflix  $netflix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Netflix $netflix)
    {
        $request->validate([

            'movie_name' => 'required',
            'id' => 'required'

        ]);

        Netflix::whereId($id)->update($validatedData);

        return redirect()->route('netflixes.index')->with('success','Movie updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Netflix  $netflix
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $netflix = Netflix::findOrFail($id);
        $netflix -> delete();
        return redirect('/netflixes')->route('netflixes.index')->with('success','Movie deleted successfully.');
    }
}
