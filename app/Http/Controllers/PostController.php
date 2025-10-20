<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $confusedGifs = ['https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExODVjeHNjMmtyb2wzbWF0cXFhMWp2NXk1MG5pNzBpdDBoaW5pY2F2aiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/lkdH8FmImcGoylv3t3/giphy.gif', 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExODVjeHNjMmtyb2wzbWF0cXFhMWp2NXk1MG5pNzBpdDBoaW5pY2F2aiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/v0eHX3n28wvoQ/giphy.gif', 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExODVjeHNjMmtyb2wzbWF0cXFhMWp2NXk1MG5pNzBpdDBoaW5pY2F2aiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/3EiNpweH34XGoQcq9Q/giphy.gif', 'https://media.giphy.com/media/v1.Y2lkPWVjZjA1ZTQ3ZWQ3ZXh0NWhjaXgwemV1aWNrZTV5MGVjdGJsOWEzMWZmd2FwZzdnMCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/2XskdWuNUyqElkKe4bm/giphy.gif', 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZGRsMnRidXA2MnhmcXhvOHVhbnFmZ2Q0cTcwZmd5ZXU5dW1qMTZleSZlcD12MV9naWZzX3RyZW5kaW5nJmN0PWc/1n4iuWZFnTeN6qvdpD/giphy.gif'];

        $random_gif = $confusedGifs[array_rand($confusedGifs)];



        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('dashboard', compact( 'posts', 'random_gif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
