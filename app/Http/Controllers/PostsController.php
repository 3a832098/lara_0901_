<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('created_at','DESC')->get();
        $data=['posts'=>$posts];
        return view('posts.index');
    }

    public function show($id)
    {
        $post = POST::find($id);
        $data = ['id' => $id];

        return view('posts.show', $data);
    }
}
