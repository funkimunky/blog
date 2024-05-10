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
        $categories = [
            [
                'name'=>'Work',
                'slug'=>'work'
            ],
            [
                'name'=>'Family',
                'slug'=>'family'
            ],
            [
                'name'=>'Hobbies',
                'slug'=>'hobbies'
            ],
        ];
        $NumRandUsers = rand(1,5);
        $userArray = [];
        for($i=0;$i<$NumRandUsers;$i++)
        {
            $userArray+=["user{$i}"=>User::factory()->create()];
        };

        $catCounter = 1;
        foreach($categories as $item)
        {
            $categoryName = "category{$catCounter}";
            $catCounter ++;
            $$categoryName = Category::factory()->create([
                'name'=>$item['name'],
                'slug'=>$item['slug']
            ]);
        }

        for($i=0; $i<$NumRandUsers; $i++){
            Post::factory()->create([
                'user_id'=>$user->id,
                'category_id'=>$category->id
            ]);
        }

        Post::factory(rand(1,3))->create([
            'user_id'=>$user->id,
            'category_id'=>$category->id
        ]);
    }
}
