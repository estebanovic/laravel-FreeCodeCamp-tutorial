<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(('auth'));
    }
    
    public function create() {
        return view('posts/create');
    }

    public function store() {

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image'],
        ]);

        auth()->user()->posts()->create($data);

        // \App\Models\Post::create([$data]);

        dd(request()->all());
    }
}
