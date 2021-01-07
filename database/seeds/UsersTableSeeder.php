<?php

use App\Genre;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        User::truncate();

        $faker = \Faker\Factory::create();

        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName,
            'document' => $faker->ean13,
            ]);

            $user->genders()->saveMany(
                $faker->randomElements(
                    array(
                        Genre::find(1),
                        Genre::find(2),
                        Genre::find(3)
                    ), $faker->numberBetween(1, 3), false
                )
            );
        }
    }
}