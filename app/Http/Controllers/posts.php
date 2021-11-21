<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class posts extends Controller
{
    public function index()
    {
        $posts = post::all();
        return view('all', [
            'posts' => $posts
        ]);
    }
    public function show($id)
    {
        $post = post::find($id);
        if ($post) {
            return view('one', ['post' => $post]);
        } else {
            abort(404);
        }
    }
    public function create(){
        return view('create');
    }
    public function store(){
        $post = new Post();
        $post->author = request('title');
        $post->content = request('content');
        $post->save();
        return redirect('/');
    }
}
