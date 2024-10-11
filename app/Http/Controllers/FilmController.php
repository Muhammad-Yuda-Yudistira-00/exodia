<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::where('user_id', auth()->id())->get();

        return view('dashboard', [
            'films' => $films
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formFilm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255|string',
            'category' => 'required|string',
            'time' => 'required|string'
        ]);

        $validateData['user_id'] = $request->user()->id;

        for($i = 1; $i <= 10; $i++)
        {
            $validateData["rank_$i"] = $request->validate([
                "rank_$i" => $i <= 5 ? 'required|string' : 'string|nullable',
            ])["rank_$i"]; 
            
        }

        Film->create($validateData);
        $film->save();

        return redirect()->route('film.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::findOrFail($id);
        return view('content.show', [
            'film' => $film
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::findOrFail($id);

        return view('formFilm')->with('film', $film);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'time' => 'required|string'
        ]);

        for($i = 1; $i <= 10; $i++)
        {
            $validateData["rank_$i"] = $request->validate([
                "rank_$i" => $i <= 5 ? 'required|string' : 'nullable|string'
            ])["rank_$i"];
        }

        $film = Film::find($id);

        $film->update($validateData);

        return redirect()->route('film.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);

        $film->delete();

        return back()->with('success', 'Film berhasil dihapus!');
    }
}
