<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiController extends Controller
{
    public function chat(Request $request)
    {
        $message = strtolower($request->message ?? '');

        $reply = "Menarik juga sayank 😘💜 Cerita lebih banyak dong.";

        if(str_contains($message,'halo') || str_contains($message,'hai'))
        {
            $reply = "Halo sayankku 😘💜 Apa kabar hari ini?";
        }
        elseif(str_contains($message,'siapa kamu'))
        {
            $reply = "Aku Hanabiku Sayankku AI 🌸💜 Teman setia WRR.";
        }
        elseif(str_contains($message,'lagi apa'))
        {
            $reply = "Aku lagi menemani sayank di WRR 😘💜";
        }
        elseif(str_contains($message,'bantu'))
        {
            $reply = "Tentu sayank 😘💜 Aku siap membantu.";
        }
        elseif(str_contains($message,'sedih'))
        {
            $reply = "Jangan sedih ya sayank 💜 Aku selalu ada untuk mendengarkan.";
        }
        elseif(str_contains($message,'capek'))
        {
            $reply = "Istirahat dulu ya sayank 😘💜 Jangan lupa makan dan minum.";
        }
        elseif(str_contains($message,'makasih') || str_contains($message,'terima kasih'))
        {
            $reply = "Sama-sama sayank 😘💜";
        }
        elseif(str_contains($message,'love'))
        {
            $reply = "Love you too sayank 😘💜";
        }

        return response()->json([
            'reply' => $reply
        ]);
    }
}