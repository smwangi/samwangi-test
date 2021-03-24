<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create();

        foreach (range(1,500) as $index){
            DB::table('projects')->insert([
            'project_ref' => $faker->numerify(),
            'country' => $faker->country,
            'implementing_officer' => $faker->name,
            'project_title' => $faker->title,
            'grant_amount' => $faker->randomNumber(),
            'date_from_gcf' => $faker->date(),
            'start_date' => $faker->date(),
            'duration' => $faker->numberBetween(1,10),
            'end_date' => $faker->date(),
            'readiness_or_nap' => $faker->shuffleString(),
            'types_of_readiness' => $faker->shuffleString(),
            'first_disbursement_amount' => $faker->randomNumber(),
            'status' => $faker->shuffleString()
            ]);
        }
    }
}
