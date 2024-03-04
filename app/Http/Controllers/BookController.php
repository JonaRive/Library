<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Categorie;
use App\Models\Editorial;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request )
    {
        $busqueda = $request->input('busqueda');
        $book = Book::  where('title','LIKE','%'.$busqueda.'%') -> paginate(5);

        $data= [
            'book'=> $book,
            'busqueda'=> $busqueda
        ];

        return view('book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author    = Author::all();
        $categorie = Categorie::all();
        $editorial = Editorial::all();

        return view('book.create', compact(
            'author',
            'categorie',
            'editorial'
        ));
    }

    /**...
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar datos 

        $validated = $request->validate([
            'title' => 'required',
            'releaseDate' => 'required',
            'language' => 'required',
            'pages' => 'required',
            'description' => 'required',
            'author_id' => 'required',
            'categorie_id' => 'required',
            'editorial_id' => 'required',
        ]);
     

        $bookData = request()->except('_token');
        Book::insert($bookData);
        return redirect ('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $author    = Author::all();
        $categorie = Categorie::all();
        $editorial = Editorial::all();

        $book = Book::findOrfail($id);
        return view('book.edit', compact( 
            'book',
            'author',
            'categorie',
            'editorial'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        //validar datos

        $validated = $request->validate([
            'title' => 'required',
            'releaseDate' => 'required',
            'language' => 'required',
            'pages' => 'required',
            'description' => 'required',
            'author_id' => 'required',
            'categorie_id' => 'required',
            'editorial_id' => 'required',
        ]);
      

        $bookData = Request()->except(['_token', '_method']);
        book::where('id', '=' , $id) -> update($bookData);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        book::destroy($id);
        return redirect('books');
    }
}

