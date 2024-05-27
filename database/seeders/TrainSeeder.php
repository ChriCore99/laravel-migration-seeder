<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $companies = ['Italo', 'Trenitalia', 'Ferrovie Dello Stato'];

        for ($i = 0; $i < 50; $i++){
            // creo istanza del modello "train"
            $new_train = new Train();

            // 
            $new_train->agencies = $faker->randomElement($companies);
            $new_train->departures_stations = $faker->city();
            $new_train->arrives_stations = $faker->city();
            $new_train->departures_times = ;
            $new_train->arrives_times = ;
            $new_train->trains_codes = $faker->bothify('??-######');
            $new_train->wagons_numbers = $faker->numberBetween(10, 12);
            $new_train->punctuals = $faker->randomElement([true, false]);
            $new_train->cancelleds = $faker->randomElement([true, false]);

            // salvo i dati
            $new_train->save();
        }
    }
}
