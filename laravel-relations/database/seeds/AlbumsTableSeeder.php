<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Album;
class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
       for ($i=0; $i < 5 ; $i++) {

         $newAlbum = new Album();
         $newAlbum->title = $faker->randomElement( [

           'Thriller',
           'Hotel California',
           'Led Zeppelin IV',
           'The Wall',
           'Back in Back',
           'Double live',
           'Paper trails',
           'Ten',
           'Stadium Arcadium',

         ]);
         $newAlbum->artist = $faker->name;
         $newAlbum->record = $faker->company;
         $newAlbum->year = $faker->year();
         $newAlbum->save();

        }


     }
}
