<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\ComicRequest;

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
    public function store(ComicRequest $request)
    {
        $comic = Comic::create($request->validated());

        return redirect()->route('comics.show', $comic)->with('success', 'Fumetto aggiunto con successo!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $comic->update($request->validated());

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
