<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index(){
        $posts = Post::orderBy('id','desc')->simplePaginate(6);
        return view('posts.index', compact('posts'));
    }


    public function show(Post $post){

        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = $request->all();
        $post['slug'] = Str::slug($request->title);

        Post::create($post);

        return back();
    }
}
