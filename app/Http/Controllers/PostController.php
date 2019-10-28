<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::active()->paginate(15);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('blog.show', compact('post'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'isActive' => 'required|boolean',
        ]);

        $attributes['slug'] = Str::slug($attributes['title']);

        Post::create($attributes);

        return back()->withMessage('Awesome!! Your post was saved just now...');
    }
}
