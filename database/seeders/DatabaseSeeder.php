<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $personal = Category::create(['name'=>'Personal', 'slug'=>'personal']);
        $family = Category::create(['name'=>'Family', 'slug'=>'family']);
        $work = Category::create(['name'=>'Work', 'slug'=>'work']);

        Post::create([
            'title'=>'My Personal Post',
            'slug'=>'my-personal-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ....',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod euismod tortor sed
                        congue. Fusce tempor lectus ut elit volutpat, id tempor risus consectetur. Phasellus eu
                        dignissim metus. Pellentesque varius lorem eu justo gravida accumsan. Suspendisse porta ipsum
                        in nibh tristique, a dignissim metus tristique. Proin neque sapien, pulvinar quis ante vel,
                        pellentesque bibendum arcu. Curabitur vitae fermentum justo. Phasellus sit amet finibus enim,
                        ut faucibus ex.</p><p>Vivamus condimentum faucibus pharetra. Nullam blandit augue vel molestie
                        posuere. Phasellus sagittis, nulla sit amet varius elementum, orci ante porttitor tortor, in
                        euismod felis orci id sapien. Sed bibendum ullamcorper lacus. Phasellus in elit turpis. Cras
                        nec mattis neque. Donec eget ligula commodo, pretium diam ac, fringilla neque. Pellentesque
                        facilisis sit amet libero at varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Pellentesque a tortor eget leo bibendum convallis. Sed eu interdum magna. Vivamus gravida
                        mattis ligula sed tincidunt.<p>',
            'category_id'=>$personal->id,
            'user_id'=>$user->id
        ]);

        Post::create([
            'title'=>'My Family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ....',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod euismod tortor sed
                        congue. Fusce tempor lectus ut elit volutpat, id tempor risus consectetur. Phasellus eu
                        dignissim metus. Pellentesque varius lorem eu justo gravida accumsan. Suspendisse porta ipsum
                        in nibh tristique, a dignissim metus tristique. Proin neque sapien, pulvinar quis ante vel,
                        pellentesque bibendum arcu. Curabitur vitae fermentum justo. Phasellus sit amet finibus enim,
                        ut faucibus ex.</p><p>Vivamus condimentum faucibus pharetra. Nullam blandit augue vel molestie
                        posuere. Phasellus sagittis, nulla sit amet varius elementum, orci ante porttitor tortor, in
                        euismod felis orci id sapien. Sed bibendum ullamcorper lacus. Phasellus in elit turpis. Cras
                        nec mattis neque. Donec eget ligula commodo, pretium diam ac, fringilla neque. Pellentesque
                        facilisis sit amet libero at varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Pellentesque a tortor eget leo bibendum convallis. Sed eu interdum magna. Vivamus gravida
                        mattis ligula sed tincidunt.<p>',
            'category_id'=>$family->id,
            'user_id'=>$user->id
        ]);

        Post::create([
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing ....',
            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque euismod euismod tortor sed
                        congue. Fusce tempor lectus ut elit volutpat, id tempor risus consectetur. Phasellus eu
                        dignissim metus. Pellentesque varius lorem eu justo gravida accumsan. Suspendisse porta ipsum
                        in nibh tristique, a dignissim metus tristique. Proin neque sapien, pulvinar quis ante vel,
                        pellentesque bibendum arcu. Curabitur vitae fermentum justo. Phasellus sit amet finibus enim,
                        ut faucibus ex.</p><p>Vivamus condimentum faucibus pharetra. Nullam blandit augue vel molestie
                        posuere. Phasellus sagittis, nulla sit amet varius elementum, orci ante porttitor tortor, in
                        euismod felis orci id sapien. Sed bibendum ullamcorper lacus. Phasellus in elit turpis. Cras
                        nec mattis neque. Donec eget ligula commodo, pretium diam ac, fringilla neque. Pellentesque
                        facilisis sit amet libero at varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Pellentesque a tortor eget leo bibendum convallis. Sed eu interdum magna. Vivamus gravida
                        mattis ligula sed tincidunt.<p>',
            'category_id'=>$work->id,
            'user_id'=>$user->id
        ]);


    }
}
