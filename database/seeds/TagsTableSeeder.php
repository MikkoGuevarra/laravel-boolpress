<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            // code...
            $new_tag =  new Tag();
            $new_tag->name = $faker->word();


            //generate slug same as title
            $slug = Str::slug($new_tag->name);
            $slug_base = $slug;
            //check if slug is existing in DB
            $tag_presente = Tag::where('slug', $slug)->first();
            $counter = 1;
            while ($tag_presente) {
                $slug = $slug_base . '-' . $counter;
                $counter++;
                $tag_presente = Tag::where('slug', $slug)->first();
            }

            $new_tag->slug = $slug;
            $new_tag->save();
        }
    }
}
