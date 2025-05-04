<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('crud.index', compact('posts'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }
    
        Post::create($validated);
    
        return redirect()->route('crud.home')->with('success', 'Post created successfully!');
    }

    public function show(Post $post)
    {
        return view('crud.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('crud.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($validated);

        return redirect()->route('crud.home')->with('success', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();
        return redirect()->route('crud.home')->with('success', 'Post deleted!');
    }
}
