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
        $categories = ['politics', 'economy', 'technology', 'humor', 'videogames', 'sport', 'nature', 'motors', 'university', 'religion'];
        for ($i=0; $i < count($categories); $i++) { 
            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->img = "https://picsum.photos/id/$i/350/500";
            $newCategory->save();
        }
    }
}
