<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Catergory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $categories = ['Technology', 'Health', 'Science', 'Sports', 'Politics', 'Entertainment'];

        // User::create([
        //     'name' => 'Rohan',
        //     'email' => 'rjrpic@gmail.com',
        //     'password' => bcrypt('rjrpic@gmail.com'),
        // ]);

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
        Post::factory(100)->create();
    }
}
