<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $users = User::where(
            'id',
            '!=',
            auth()->id()
        )->get();

        return view(
            'messages',
            compact('users')
        );
    }

    public function store(Request $request)
    {
        Message::create([

            'sender_id' => auth()->id(),

            'receiver_id' => $request->receiver_id,

            'message' => $request->message

        ]);

        return back();
    }
}