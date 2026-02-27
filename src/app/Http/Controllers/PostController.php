<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::orderBy('created_at', 'desc')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'body' => 'required|string|max:1000',
        ]);
        \App\Models\Post::create($validated);
        return redirect()->route('posts.index');
    }
}
