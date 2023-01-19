<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_train = new Train();

        $new_train->company = $faker->company();
        $new_train->departure_station = $faker->city();
        $new_train->arrival_station = $faker->city();
        $new_train->arrival_station = $faker->city();
        $new_train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
        $new_train->arrival_time = Carbon::parse($new_train->departure_time)->addHours(rand(0, 8))->addMinutes(rand(0, 59));
        $new_train->code = $faker->bothify('?????#####');
        $new_train->wagon = rand(1, 10);
        $new_train->is_in_time = $faker->boolean(80);
        $new_train->cancelled = $faker->boolean(10);
        $new_train->platform = rand(1,20);

        $new_train->save;
    }
}
