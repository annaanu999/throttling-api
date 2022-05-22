<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
         Post::truncate();

         $faker = \Faker\Factory::create();
 
         // And now, let's create a few posts in our database:
         for ($i = 0; $i < 50; $i++) {
             Post::create([
                 'title' => $faker->sentence,
                 'description' => $faker->paragraph,
             ]);
         }
    }
}
