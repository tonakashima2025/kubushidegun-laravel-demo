<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {

        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('posts/index', [ 'posts' => $posts ]);

    }

    public function new() {

        return view('posts/new');

    }

    public function create(Request $request) {

        $post = new Post();
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index');

    }

    public function show($id) {

        $post = Post::find($id);
        
        return view('posts/show', [ 'post' => $post ]);
        
    }
    
    public function edit($id) {
        
        $post = Post::find($id);

        return view('posts/edit', [ 'post' => $post ]);

    }

    public function update(Request $request, $id) {
        
        $post = Post::find($id);
        $post->content = $request->content;
        $post->save();
        
        return redirect()->route('posts.index');
        
    }
    
    public function destroy($id) {
        
        $post = Post::find($id);
        $post->delete();
        
        return redirect()->route('posts.index');

    }
}
