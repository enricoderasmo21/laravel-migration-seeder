<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 30; $i++){

            $newTrain = new Train;
    
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('now', '+2 weeks');
            $newTrain->departure_hour = $faker->time('H:i');
            $newTrain->arrival_hour = $faker->time('H:i');
            $newTrain->train_code = $faker->bothify('??#####');
            $newTrain->carriages_number = $faker->numberBetween(2, 15);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->ticket_price = $faker->randomFloat(2, 1, 200);
    
            $newTrain->save();
        }  
    }
}
