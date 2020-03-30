<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// My model
use App\Post;

class PostController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function debug(Request $request)
    {
        // The 'except' method will ignore the especified item
        // dd($request->except(['_token']));

        $post = new Post;
        
        /*
            Fillable way:
            To do this (in secure way) you need the $fillable in Post model

            $post->create($request->except(['_token']));
        */
        // Manual way (prefer):
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();
    }
}
