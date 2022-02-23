<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts/index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts/create', ['user' => Auth::user()]);
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = request('title');
        $post->content = request('content');
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('posts/edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        return redirect()->route('posts.show', ['post' => $post])->with('success', 'Post updated!');
    }

    public function show(Post $post)
    {
        return view('posts/index', ['posts' => $post]);
    }

    public function destroy(Post $post)
    {
        
    }

}
