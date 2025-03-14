<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('team')->insert([
                'name_team' => $faker->unique()->name,
                'logo_team' => $faker->sentence,
                'location_team' => $faker->sentence,
                'total_member' => $faker->numberBetween(1, 10),
                'member' => $faker->numberBetween(1, 10),
                'description_team' => $faker->sentence,
                'scope_team' => $faker->sentence,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}