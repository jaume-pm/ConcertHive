<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Http\Requests\StoreArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $artists = Artist::all();
        
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
    // Find the artist by name
    $artist = Artist::where('name', 'Sophia Anderson')->first();

    if ($artist) {
        // Use withCount to get the count directly without loading all records
        $concertCount = $artist->concerts()->count();

        // Output the result
        echo "Number of concerts for Sophia Anderson: $concertCount";
    } else {
        // Handle the case where the artist is not found
        echo "Artist Sophia Anderson not found.";
    }
    
        return view('artists.show', compact('artist', 'concertCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtistRequest $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
