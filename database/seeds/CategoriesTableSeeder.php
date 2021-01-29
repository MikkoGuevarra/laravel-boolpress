<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategoriesTableSeeder extends Seeder
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
            $new_category =  new Category();
            $new_category->name = $faker->word();


            //generate slug same as title
            $slug = Str::slug($new_category->name);
            $slug_base = $slug;
            //check if slug is existing in DB
            $categoria_presente = Category::where('slug', $slug)->first();
            $counter = 1;
            while ($categoria_presente) {
                $slug = $slug_base . '-' . $counter;
                $counter++;
                $categoria_presente = Category::where('slug', $slug)->first();
            }

            $new_category->slug = $slug;
            $new_category->save();
        }

    }
}
