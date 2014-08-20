<?php

use Faker\Factory as Faker;
use Japan\Flavours\Flavour;

class FlavoursTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index)
        {
            Flavour::create([
                'name'       => $faker->word,
                'city_id' => $faker->numberBetween(1, 3),
                'thumbnail'  => rand(1, 3) . '.jpg',
                'pic'  => rand(1, 3) . '.jpg',
                'created_at' => $faker->dateTime()
            ]);
        }
    }

}