<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
        $post = Post::findOrFail($id);

        return view('show',['post' => $post]);
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('edit',['post' => $post]);
    }
    
}
