<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Vehicle;
/*példa az alias meghatározásra*/
use Faker\Factory as Faker;

class VehicleSeed extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for($i=0;$i<37;$i++)
        {
            Vehicle::create([

                'color'=>$faker->safeColorName,
                'power'=>$faker->randomNumber(),
                'capacity'=>$faker->randomFloat(),
                'speed'=>$faker->randomFloat(),
                'maker_id'=>$faker->numberBetween(1,8)
            ]);

        }
    }

}
