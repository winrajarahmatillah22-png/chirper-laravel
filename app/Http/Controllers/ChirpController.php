<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirp;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')->latest()->get();
        return view('chirps.index', compact('chirps'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|max:255',
        ]);

        Chirp::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}