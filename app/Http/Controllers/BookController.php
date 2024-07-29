<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = books::all();
        return view ('user.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $books = new Books();
        $books->title = $request['title'];
        $books->author = $request['author'];
        $books->description = $request['description'];
        $books->isbn = $request['isbn'];
        $books->publication_year = $request['publication_year'];

        return redirect()->to('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $books = Books::find($id);
        return $books->title;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data['books'] = Books::all();
        return view ('books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $books = Books::find($id);
        $books->title = $request['title'];
        $books->author = $request['author'];
        $books->description = $request['description'];
        $books->isbn = $request['isbn'];
        $books->publication_year = $request['publication_year'];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
