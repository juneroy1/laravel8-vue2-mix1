<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = BookModel::all();

        return response()->json([
            "success" => true,
            "data" => $books,
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
        $book = new BookModel;
        $book->name = $request->name;
        $book->description = $request->description;
        $book->save();

        return response()->json([
            'sucess'    => true,
            'message' => 'Successfully registered new book',
            'data'      => $book
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
        $book =  BookModel::find($id);
        $book->name = $request->name;
        $book->description = $request->description;
        $book->save();

        return response()->json([
            'sucess'    => true,
            'message' => 'Successfully updated book details',
            'data'      => $book
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
        $book =  BookModel::find($id);
        
        $book->delete();

        return response()->json([
            'sucess'    => true,
            'message' => 'Successfully deleted book details',
        ]);
    }
}
