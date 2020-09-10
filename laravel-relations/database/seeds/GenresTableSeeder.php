<?php

// in questo caso non utilizzo faker, ma creo un array
use Illuminate\Database\Seeder;
use App\Genre;


class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

      $genres = [

        'pop',
        'metal',
        'jazz',
        'rock',
        'electronic',
        'classic'

      ];

        foreach ($genres as $genre) {

          $newCategory = new Genre();
          $newCategory->genre = $genre;
          $newCategory->save();


        }


    }
}
