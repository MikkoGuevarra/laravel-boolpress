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
        for ($i=0; $i < 10; $i++) {
            $new_post_obj = new Post();
            $new_post_obj->name = $faker->firstName();
            $new_post_obj->lastname = $faker->lastName();
            $new_post_obj->title = $faker->catchPhrase();
            // $new_post_obj->subtitle = $faker->catchPhrase();
            // $new_post_obj->content = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $new_post_obj->save();

        }





    }
}
