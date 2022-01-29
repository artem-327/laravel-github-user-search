<?php

use Illuminate\Database\Seeder;

// Import DB and Faker services
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,10) as $index) {
            DB::table('repos')->insert([
                'name' => $faker->name,
                'username' => $faker->username,
                'forks' => 5,
                'stars' => 3,
            ]);
        }
    }
}
