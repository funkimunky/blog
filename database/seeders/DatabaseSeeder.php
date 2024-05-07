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
        $category = Category::factory()->create([
            'name'=>'Family'
        ]);
        $user = User::factory()->create([
            'username'=>'John Doe'
        ]);
        Post::factory(4)->create([
            'user_id'=>$user->id,
            'category_id'=>$category->id
        ]);


        $category = Category::factory()->create([
            'name'=>'Work'
        ]);
        $user = User::factory()->create([
            'username'=>'Jane Doe'
        ]);
        Post::factory(4)->create([
            'user_id'=>$user->id,
            'category_id'=>$category->id
        ]);

        $category = Category::factory()->create([
            'name'=>'Hobbies'
        ]);
        $user = User::factory()->create([
            'username'=>'Albus Dumbledore'
        ]);
        Post::factory(4)->create([
            'user_id'=>$user->id,
            'category_id'=>$category->id
        ]);

    }
}
