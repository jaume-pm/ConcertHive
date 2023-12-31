<?php

namespace App\Http\Controllers\Api;

use App\Models\Concert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        $concerts = Concert::all();
        return response()->json($concerts);
    }

    public function indexUserConcerts()
    {
        $user = auth()->user();
        $concerts = $user->concerts;
        return response()->json($concerts);
    }
}
