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
            $new_post_obj->title = $faker->word();
            $new_post_obj->content = $faker->paragraph(2);
            // $new_post_obj->slug = $faker->word();

            //generate slug same as title
            $slug = Str::slug($new_post_obj->title);
            $slug_base = $slug;
            //check if slug is existing in DB
            $post_presente = Post::where('slug', $slug)->first();
            $counter = 1;
            while ($post_presente) {
                $slug = $slug_base . '-' . $counter;
                $counter++;
                $post_presente = Post::where('slug', $slug)->first();
            }

            $new_post_obj->slug = $slug;
            $new_post_obj->save();
        }
    }
}
