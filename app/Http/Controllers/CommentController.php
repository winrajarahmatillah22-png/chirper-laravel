<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Chirp;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Chirp $chirp)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $chirp->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $validated['comment'],
        ]);

        return back();
    }

    public function destroy(Comment $comment)
{
    if ($comment->user_id !== auth()->id()) {
        abort(403);
    }

    $comment->delete();

    return back();
}
}