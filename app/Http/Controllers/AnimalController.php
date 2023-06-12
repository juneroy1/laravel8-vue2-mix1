<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnimalModel;
class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $animal =  AnimalModel::all();
        return response()->json([
            'sucess'    => true,
            'data'      => $animal
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //nothing to do here
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
        $animal = new AnimalModel;
        $animal->name = $request->name;
        $animal->description = $request->description;
        $animal->save();

        return response()->json([
            'sucess'    => true,
            'message' => 'Successfully registered new animal',
            'data'      => $animal
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
        $animal =  AnimalModel::find($id);
        $animal->name = $request->name;
        $animal->description = $request->description;
        $animal->save();

        return response()->json([
            'sucess'    => true,
            'message' => 'Successfully updated animal details',
            'data'      => $animal
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

        $animal =  AnimalModel::find($id);
        
        $animal->delete();

        return response()->json([
            'sucess'    => true,
            'message' => 'Successfully deleted animal details',
        ]);
       
    }
}
