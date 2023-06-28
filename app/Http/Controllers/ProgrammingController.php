<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programming = ProgrammingModel::all();

        return response()->json([
            "success" => true,
            "data" => $programming,
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
        $programming = new ProgrammingModel;
        $programming->name = $request->name;
        $programming->description = $request->description;
        $ok = $programming->save();

        if ($ok) {
            return response()->json([
                "success" => true,
                "data" => $programming,
                "message"=> "Successfully registered new programming"
            ]);
        }

        return response()->json([
            "success" => false,
            "message"=> "Registering programming failed"
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
        $programming = ProgrammingModel::find($id);
        
        if ($programming) {
            return response()->json([
                "success" => true,
                "data" => $programming,
            ]);
        }
        return response()->json([
            "success" => true,
            "data" => false,
            "message" => "Programming details did not exist",
        ]);
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
        $programming = ProgrammingModel::find($id);
        $programming->name = $request->name;
        $programming->description = $request->description;
        $ok = $programming->save();
        if ($ok) {
            return response()->json([
                "success" => true,
                "data" => $programming,
                "message" => "Successfully update programming details"
            ]);
        }

        return response()->json([
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
        $programming = ProgrammingModel::find($id);
    }
}
