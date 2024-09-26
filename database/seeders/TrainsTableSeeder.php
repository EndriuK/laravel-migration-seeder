<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Trains;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Trains();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $train->arrival_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $train->train_code = $faker->bothify('???-##');
            $train->carriages = $faker->numberBetween(0, 20);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
