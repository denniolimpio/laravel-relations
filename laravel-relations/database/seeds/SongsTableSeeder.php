<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;
class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

          for ($i=0; $i < 5; $i++) {
            for ($j=0; $j < 50 ; $j++) {
              $newSong = new Song();
              $newSong->title = $faker->name;
              $newSong->album_id = $i + 1;
              $newSong->save();
            }
            }          }
}
