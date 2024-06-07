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
        $user = User::factory()->create([
            'name'=>'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);

//
//            $user = User::factory()->create([
//                'username'=>'John Doe'
//            ]);

<<<<<<< HEAD
//            Post::factory(5)->create([
//                'user_id'=>$user->id
//            ]);
            Post::factory(5)->create();
=======
        $user = User::factory()->create([
            'name'=>'Sarah McDonald'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);


        $user = User::factory()->create([
            'name'=>'Rodger Fedorah'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
>>>>>>> fix-author-view


    }
}
