<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggle(Chirp $chirp)
    {
        $like = $chirp->likes()
            ->where('user_id', auth()->id())
            ->first();

        if ($like) {

            $like->delete();

        } else {

            $chirp->likes()->create([
                'user_id' => auth()->id(),
            ]);

        }

        return back();
    }
}