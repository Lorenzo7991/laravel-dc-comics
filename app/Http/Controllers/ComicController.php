<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    protected $menuItems;

    public function __construct()
    {
        $this->menuItems = config('menuItems.menuItems');
        view()->share('menuItems', $this->menuItems);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:150',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:50',
            'artists' => 'required|string|max:255',
            'writers' => 'required|string|max:255',
        ]);

        $comic = Comic::create($validatedData);

        return redirect()->route('comics.show', $comic)->with('success', 'Fumetto aggiunto con successo!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:150',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:150',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:50',
            'artists' => 'required|string|max:255',
            'writers' => 'required|string|max:255',
        ]);

        $comic->update($validatedData);

        return redirect()->route('comics.show', $comic)->with('success', 'Fumetto aggiornato con successo!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
