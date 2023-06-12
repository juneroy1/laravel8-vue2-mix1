<?php

namespace App\Http\Controllers;

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
        //
        $movies = MovieModel::all();

        return response()->json([
            "success" => true,
            "data" => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $movie = new MovieModel;
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();

        return response()->json([
            "success" => true,
            "message" => "Successfully registered new movie",
            "data" => $movie
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $movie =  MovieModel::find($id);
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->save();

        return response()->json([
            "success" => true,
            "message" => "Successfully update movie details",
            "data" => $movie
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $movie =  MovieModel::find($id);
        $movie->delete();

        return response()->json([
            "success" => true,
            "message" => "Successfully deleted movie",
        ]);
    }
}
