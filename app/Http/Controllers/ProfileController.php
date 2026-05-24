<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit');
    }

    public function update(Request $request)
{
    $validated = $request->validate([

        'name' => 'required|string|max:255',
        'bio' => 'nullable|string|max:500',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

    ]);

    $user = $request->user();

    if ($request->hasFile('avatar')) {

        $validated['avatar'] = $request
            ->file('avatar')
            ->store('avatars', 'public');
    }

    $user->update($validated);

    return back();
}


    public function destroy(Request $request)
{
    $user = $request->user();

    auth()->logout();

    $user->delete();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}
}