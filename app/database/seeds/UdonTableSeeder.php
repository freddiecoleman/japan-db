<?php

use Faker\Factory as Faker;
use Japan\Udon\Udon;

class UdonTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index)
        {
            Udon::create([
                'name'        => $faker->word,
                'name_jp'        => $faker->word,
                'description' => $faker->sentence(),
                'city_id'     => $faker->numberBetween(1, 5),
                'thumbnail'   => rand(1, 3) . '.jpg',
                'pic'         => rand(1, 3) . '.jpg',
                'created_at'  => $faker->dateTime()
            ]);
        }
    }

}