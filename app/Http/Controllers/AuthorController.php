<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['author'] = Author::paginate(5);
        return view('author.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos

        $validated = $request->validate([
            'author' => 'required',
        ]);

        $authorData = request()->except('_token');
        Author::insert($authorData);
        return redirect('authors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $author = Author::findOrFail($id);
        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Validar datos

        $validated = $request->validate([
            'author' => 'required',
        ]);

        $authorData = request()->except(['_token', '_method']);
        Author::where('id', '=', $id)->update($authorData);
        return redirect('authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Author::destroy($id);
        return redirect('authors');
    }
}
