<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = User::where('type', 'teacher')->get();

        return response()->json([
            'success' => true,
            'data' => $teachers
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
        $teacher = new User;
        $teacher->type = 'teacher';
        $ok = $teacher->save();
        
        if ($ok) {
            return response()->json([
                'success' => true,
                'data' => $teacher,

                'message' => 'successfully created new teacher in the app',
            ]);
        }
        return response()->json([
            'success' => false,
            'data' => false,
            'message' => 'Something went wrong',
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
        $teacher = User::find($id);
        if ($teacher) {
            return response()->json([
                'success' => true,
                'data' => $teacher,

                'message' => 'successfully get teacher details',
            ]);
        }

        return response()->json([
            'success' => false,
            'data' => false,
            'message'=>"Something went wrong"
        ]);
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
        $teacher = User::find($id);
        if ($teacher) {
            return response()->json([
                'success' => true,
                'data' => $teacher,
                "message" => "Successfully get the teacher details"
            ]);
        }
        return response()->json([
            'success' => false,
            'data' => false,
            "message" => "Something went wrong"
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
    }
}
