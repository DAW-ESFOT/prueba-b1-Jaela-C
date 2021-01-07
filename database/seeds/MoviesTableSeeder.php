<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla comments
        Movie::truncate();
        $faker = \Faker\Factory::create();
        // Obtenemos todos los artículos de la bdd
        $genders = App\Genre::all();
        
        foreach ($genders as $genre) {
            for ($j = 0; $j < 20; $j++) {
                Movie::create([
                    'name' => $faker->word,
                    'code' => $faker->isbn13,
                    'year' => $faker->year,
                    'available' => $faker->boolean,
                    'genre_id' => $genre->id,
                    ]);
                }
        }        
    }
}
