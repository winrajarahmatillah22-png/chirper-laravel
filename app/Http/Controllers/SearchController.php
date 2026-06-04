<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->search;

        $users = User::where(
            'name',
            'like',
            "%{$keyword}%"
        )->get();

        return view(
            'search',
            compact('users','keyword')
        );
    }
}