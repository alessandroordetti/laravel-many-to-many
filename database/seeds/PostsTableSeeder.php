<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $newPost = new Post();
            $newPost->author= $faker->name();
            $newPost->title= $faker->sentence(8);
            $newPost->image= "https://picsum.photos/id/$i/350/500";
            $newPost->description = $faker->text(50);
            $newPost->date= $faker->date('Y-m-d');
            $newPost->save();
        }
    }
}
