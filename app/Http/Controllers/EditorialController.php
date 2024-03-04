<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['editorial'] = Editorial::paginate(5);
        return view('editorial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos

        $validated = $request->validate([
            'editorial' => 'required',
        ]);

        $editorialData = request()-> except('_token');
        Editorial::insert($editorialData);
        return redirect('editorials');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editorial = editorial::findOrFail($id);
        return view('editorial.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         //Validar datos

         $validated = $request->validate([
            'editorial' => 'required',
        ]);

        $editorialData = request()->except(['_token', '_method']);
        Editorial::where('id','=',$id)->update($editorialData) ;
        return redirect('editorials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         Editorial::destroy($id);
         return redirect('editorials');
    }
}

