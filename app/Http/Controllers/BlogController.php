<?php

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.show', compact('post'));
    }
    public function blog()
{
    // Retrieve blog data from your database or other data source
    $posts = BlogPost::all();

    // Pass the data to the view
    return view('blog', ['posts' => $posts]);
}
}