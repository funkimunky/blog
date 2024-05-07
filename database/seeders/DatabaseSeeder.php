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
        $randomUser = rand(1,5);
        for($i=0;$i<$randomUser;$i++)
        {
            $user = User::factory()->create();
            foreach($categories as $item)
            {
                $category = Category::factory()->create([
                    'name'=>$item['name'],
                    'slug'=>$item['slug']
                ]);
                Post::factory(rand(1,3))->create([
                    'user_id'=>$user->id,
                    'category_id'=>$category->id
                ]);
            }
        };
    }
}
