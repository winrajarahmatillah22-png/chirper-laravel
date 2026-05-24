<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        return back()->with('success', 'Postingan berhasil dibuat!');
    }

    public function destroy($id)
    {
        return back()->with('success', 'Postingan berhasil dihapus!');
    }
}