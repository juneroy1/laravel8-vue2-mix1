<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolModel;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schools = SchoolModel::all();

        return response()->json([
            "success" => true,
            "data" => $schools,
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
         $school = new SchoolModel;
         $school->name = $request->name;
         $school->description = $request->description;
         $ok = $school->save();

         if ($ok) {
             return response()->json([
                "success" => true,
                "data" => $school,
                "message" => "Successfully created new school"
            ]);
         }

          return response()->json([
                "success" => false,
                "data" => false,
                "message" => "Error in creating school"
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
        $school = SchoolModel::find($id);
        if ($school) {
            return response()->json([
                "success" => true,
                "data" => $school,
            ]);
        }
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
        $school = SchoolModel::find($id);
        if ($school) {
            # code...
            // if not nil then update school details
            return response()->json([
                "success" => true,
                "data" => $school,
                "message" => "School details",
            ]);
        }

        return response()->json([
            "success" => false,
            "data" => false,
            "message" => "School does not exist",
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
        $school =  SchoolModel::find($id);
        $school->name = $request->name;
        $school->description = $request->description;
        

        $ok = $school->save();

         if ($ok) {
             return response()->json([
                "success" => true,
                "data" => $school,
                "message" => "Successfully updated school"
            ]);
         }

          return response()->json([
                "success" => false,
                "data" => false,
                "message" => "Error in updating school"
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
        $school =  SchoolModel::find($id);
        $ok = $school->delete();

        if ($ok) {
            return response()->json([
                "success" => true,
                "message" => "School details successfully deleted"
            ]);
        }

        return response()->json([
            "success" => false,
            "message" => "Something went wrong in deleting school data"
        ]);
    }
}
