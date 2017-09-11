<?php

use App\Image;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $imagesLinks = array(
            "http://angular.app/images/1gal.jpg",
            "http://angular.app/images/2gal.jpg",
            "http://angular.app/images/3gal.jpg",
            "http://angular.app/images/4gal.jpg",
            "http://angular.app/images/5gal.jpg",
            "http://angular.app/images/6gal.jpg",
            "http://angular.app/images/7gal.jpg",
            "http://angular.app/images/8gal.jpg"
        );

        foreach($imagesLinks as $imagesLink)
        {
            Image::create([
                'title' => $faker->text(80),
                'description' => $content = $faker->paragraph(18),
                'thumnail' => $imagesLink,
                'imageLink' => $imagesLink,
                'user_id' => $faker->numberBetween($min = 1, $max = 5)
            ]);
        }
    }
}
