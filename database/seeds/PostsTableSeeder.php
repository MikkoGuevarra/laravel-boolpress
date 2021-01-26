<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {

            $new_post_obj = new Post();
            $new_post_obj->name = $faker->firstName();
            $new_post_obj->lastname = $faker->lastName();
            $new_post_obj->title = $faker->word();
            $new_post_obj->subtitle = $faker->sentence(3);
            $new_post_obj->content = $faker->paragraph(2);
            $new_post_obj->category = $faker->word();
            $new_post_obj->save();
        }
    }
}
