<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post as p;

Route::get('/', function () {
<<<<<<< HEAD
=======
//    \Illuminate\Support\Facades\DB::listen(function($query){
//        logger($query->sql, $query->bindings);
//    });
    $posts = Post::latest('updated_at')->with('category','author')->get();

>>>>>>> fix-author-view
    return view('posts',[
        'posts' => Post::latest('published_at')
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post){

    return view('post',[
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category)
{
    return view('posts',[
        'posts' => $category->posts
    ]);
});

Route::get('/authors/{author:username}', function (User $author)
{
<<<<<<< HEAD
    return view('posts',[
        'posts' => $author->posts
=======
    $posts = $author->posts;

    return view('posts',[
        'posts' => $posts
>>>>>>> fix-author-view
    ]);
});

Route::get('/phpinfo', function () {
    return phpinfo();
});

