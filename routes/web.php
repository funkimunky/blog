<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Models\Post as p;

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::all()
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

Route::get('/populatedata', function ()
{
    $c = new App\Models\Category;
    $c->name = 'Family';
    $c->slug = 'family';
    $c->save();

    $c = new App\Models\Category;
    $c->name = 'Work';
    $c->slug = 'work';
    $c->save();

    $c = new App\Models\Category;
    $c->name = 'Hobbies';
    $c->slug = 'hobbies';
    $c->save();



    p::create(['title'=>'My Family Post','slug'=>'my-family-post','excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ....','body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod euismod tortor sed congue. Fusce tempor lectus ut elit volutpat, id tempor risus consectetur. Phasellus eu dignissim metus. Pellentesque varius lorem eu justo gravida accumsan. Suspendisse porta ipsum in nibh tristique, a dignissim metus tristique. Proin neque sapien, pulvinar quis ante vel, pellentesque bibendum arcu. Curabitur vitae fermentum justo. Phasellus sit amet finibus enim, ut faucibus ex.</p><p>Vivamus condimentum faucibus pharetra. Nullam blandit augue vel molestie posuere. Phasellus sagittis, nulla sit amet varius elementum, orci ante porttitor tortor, in euismod felis orci id sapien. Sed bibendum ullamcorper lacus. Phasellus in elit turpis. Cras nec mattis neque. Donec eget ligula commodo, pretium diam ac, fringilla neque. Pellentesque facilisis sit amet libero at varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque a tortor eget leo bibendum convallis. Sed eu interdum magna. Vivamus gravida mattis ligula sed tincidunt.<p>','category_id'=>1]);

    p::create(['title'=>'My Work Post','slug'=>'my-work-post','excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ....','body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod euismod tortor sed congue. Fusce tempor lectus ut elit volutpat, id tempor risus consectetur. Phasellus eu dignissim metus. Pellentesque varius lorem eu justo gravida accumsan. Suspendisse porta ipsum in nibh tristique, a dignissim metus tristique. Proin neque sapien, pulvinar quis ante vel, pellentesque bibendum arcu. Curabitur vitae fermentum justo. Phasellus sit amet finibus enim, ut faucibus ex.</p><p>Vivamus condimentum faucibus pharetra. Nullam blandit augue vel molestie posuere. Phasellus sagittis, nulla sit amet varius elementum, orci ante porttitor tortor, in euismod felis orci id sapien. Sed bibendum ullamcorper lacus. Phasellus in elit turpis. Cras nec mattis neque. Donec eget ligula commodo, pretium diam ac, fringilla neque. Pellentesque facilisis sit amet libero at varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque a tortor eget leo bibendum convallis. Sed eu interdum magna. Vivamus gravida mattis ligula sed tincidunt.<p>','category_id'=>2]);

    p::create(['title'=>'My Hobbies Post','slug'=>'my-hobbies-post','excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ....','body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod euismod tortor sed congue. Fusce tempor lectus ut elit volutpat, id tempor risus consectetur. Phasellus eu dignissim metus. Pellentesque varius lorem eu justo gravida accumsan. Suspendisse porta ipsum in nibh tristique, a dignissim metus tristique. Proin neque sapien, pulvinar quis ante vel, pellentesque bibendum arcu. Curabitur vitae fermentum justo. Phasellus sit amet finibus enim, ut faucibus ex.</p><p>Vivamus condimentum faucibus pharetra. Nullam blandit augue vel molestie posuere. Phasellus sagittis, nulla sit amet varius elementum, orci ante porttitor tortor, in euismod felis orci id sapien. Sed bibendum ullamcorper lacus. Phasellus in elit turpis. Cras nec mattis neque. Donec eget ligula commodo, pretium diam ac, fringilla neque. Pellentesque facilisis sit amet libero at varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque a tortor eget leo bibendum convallis. Sed eu interdum magna. Vivamus gravida mattis ligula sed tincidunt.<p>','category_id'=>3]);

    $posts = p::all();

    return view('posts',[
        'posts' => $posts
    ]);
});



Route::get('/phpinfo', function () {
    return phpinfo();
});

