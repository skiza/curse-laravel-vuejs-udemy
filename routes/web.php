<?php

Route::get('/', function () {
    $posts =  App\Post::latest('publish_at')->get();

    return view('welcome', compact('posts'));
});


Route::get('posts', function() {
    $posts =  App\Post::all();

    return view('welcome', compact('posts'));
});