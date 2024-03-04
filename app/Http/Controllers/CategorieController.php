<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['categorie'] = Categorie::paginate(5);
        return view('categorie.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos

        $validated = $request->validate([
            'categorie' => 'required',
        ]);

        $categorieData = request()->except('_token');
        Categorie::insert($categorieData);
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
         //Validar datos

         $validated = $request->validate([
            'categorie' => 'required',
        ]);

        $categorieData = request()->except(['_token', '_method']);
        Categorie::where('id','=', $id)->update($categorieData);
        return redirect('categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Categorie::destroy($id);
        return redirect('categories');
    }
}

