<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChirpController extends Controller
{
    public function index()
    {
        return view('chirps.index', [
            'chirps' => Chirp::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
    'message' => 'required|string|max:255',
    'image' => 'nullable|mimes:jpg,jpeg,png,mp4,mov,avi|max:10240',
]);

if ($request->hasFile('image')) {

    $validated['image'] = $request
        ->file('image')
        ->store('chirps', 'public');
}

        $request->user()->chirps()->create([
    'message' => $validated['message'],
    'image' => $validated['image'] ?? null,
]);

        return redirect(route('chirps.index'));
    }

    public function edit(Chirp $chirp)
    {
        if ($chirp->user_id !== Auth::id()) {
            abort(403);
        }

        return view('chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp)
    {
        if ($chirp->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect()->route('chirps.index');
    }

    public function destroy(Chirp $chirp)
    {
        if ($chirp->user_id !== Auth::id()) {
            abort(403);
        }

        $chirp->delete();

        return redirect()->route('chirps.index');
    }
}