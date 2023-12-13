<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConcertRequest;
use App\Http\Requests\UpdateConcertRequest;
use App\Http\Requests\JoinConcertRequest;
use App\Models\Concert;

class ConcertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concerts = Concert::all();

        return view('concerts.index', compact('concerts'));

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
    public function store(StoreConcertRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Concert $concert)
    {
        return view('concerts.show', compact('concert'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concert $concert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConcertRequest $request, Concert $concert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concert $concert)
    {
        //
    }

    public function joinConcert(Concert $concert, JoinConcertRequest $request)
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Perform logic to check if the user is already attending, etc.
        if (!$concert->users->contains($user)) {
            // Add the user to the concert's attendees
            $concert->users()->attach($user, ['concert_id' => $concert->id]);

            // Optionally, you can add a success message or perform other actions
            return redirect()->back()->with('success', 'You have joined the concert!');
        } else {
            // Optionally, you can add a message or perform other actions
            return redirect()->back()->with('info', 'You are already attending this concert.');
        }
    }

    public function indexUserConcerts()
    {
        $user = auth()->user();

        $concerts = $user->concerts;

        return view('concerts.index', compact('concerts'));
    }

    public function indexArtistConcerts()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Check if the user has the role of an artist
        if ($user->isArtist()) {
            // Retrieve concerts where the artist has the same name as the user
            $concerts = Concert::whereHas('artist', function ($query) use ($user) {
                $query->where('name', $user->name);
            })->get();

            return view('concerts.index', compact('concerts'));
        }

    }
}
