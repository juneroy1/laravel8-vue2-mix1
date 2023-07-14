<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = User::where('type', 'student')->get();

        return response()->json([
            'success' => true,
            'data' => $students
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
        $student = new User;
        $student->type = 'student';
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->middle_name = $request->middle_name;
        $ok = $student->save();

        if ($ok) {
            return response()->json([
                'success' => true,
                'data' => $student,
                'message' => 'successfully created new student in the app',
                
            ]);
        }

        return response()->json([
            'success' => false,
            'data' => false,
            'message' => 'Something went wrong in creating student',
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
        $student = User::find($id);

        if ($student) {
            return response()->json([
                'success' => true,
                'data' => $student,
                'message' => "Successfully get student details"
            ]);
        }

        return response()->json([
                'success' => false,
                'data' => false,
                'message' => "Something went wrong"
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
        $student = User::find($id);

        if ($student) {
            return response()->json([
                'success' => true,
                'data' => $student,
                'message' => "Successfully get student details"
            ]);
        }

        return response()->json([
            'success' => false,
            'data' => false,
            'message' => "Something went wrong in getting student  details"
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
        $student = User::find($id);

        if ($student) {
            return response()->json([
                'success' => true,
                'data' => $student,
                'message' => "Successfully get student details"
            ]);
        }


        return response()->json([
            'success' => false,
            'data' => false,
            'message' => "Something went wrong"
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
        $student = User::find($id);

        if ($student) {
            return response()->json([
            ]);
        }
    }
}
