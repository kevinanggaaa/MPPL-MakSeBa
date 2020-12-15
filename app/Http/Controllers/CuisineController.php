<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use Illuminate\Http\Request;
use App\Http\Requests\CuisineRequest;

class CuisineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuisines = Cuisine::all();

        return view('cuisines.index', compact('cuisines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuisines = Cuisine::all();

        return view('cuisines.create', compact('cuisines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuisineRequest $request)
    {
        Cuisine::create([
            'cuisine_name' => $request['cuisine_name'],
            'description' => $request['description'],
            'ingredients' => $request['ingredients'],
            'recipe' => $request['recipe'],
        ]);

        return redirect()->route('cuisines.index')
            ->with('success', 'Data cuisine berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cuisine $cuisine)
    {
        return view('cuisines.show', compact('cuisine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuisine $cuisine)
    {
        $cuisines = Cuisine::all();

        return view('cuisines.edit', compact('cuisine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CuisineRequest $request, Cuisine $cuisine)
    {
        $cuisine->cuisine_name = $request['cuisine_name'];
        $cuisine->description = $request['description'];
        $cuisine->ingredients = $request['ingredients'];
        $cuisine->recipe = $request['recipe'];
        $cuisine->save();

        return redirect()->route('cuisines.index')
            ->with('success', 'Data cuisine berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuisine $cuisine)
    {
        $cuisine->delete();

        return redirect()->route('cuisines.index')
            ->with('success', 'Data cuisine berhasil dihapus');
    }
}
