<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $musics = MusicModel::all();

        return response()->json([
            "success" => true,
            "data" => $musics
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
        $music = new MusicModel;
        $music->name = $request->name;
        $music->description = $request->description;
        $music->save();

        return response()->json([
            "success" => true,
            "message" => "Successfully registered new music",
            "data" => $music
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
        $music =  MusicModel::find($id);
        $music->name = $request->name;
        $music->description = $request->description;
        $ok = $music->save();

        if ($ok) {
            # code...
        }
        return response()->json([
            "success" => true,
            "message" => "Successfully update music details",
            "data" => $music
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
        $music =  MusicModel::find($id);
        $music->delete();
        
        return response()->json([
            "success" => true,
            "message" => "Successfully deleted music",
        ]);
    }
}
