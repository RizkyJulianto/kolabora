<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('company')->insert([
                'name_company' => $faker->unique()->name,
                'about_company' => $faker->sentence,
                'address_company' => $faker->sentence,
                'slogan' => $faker->sentence,
                'scope_company' => $faker->sentence,
                'contact' => $faker->sentence,
                'instagram' => $faker->sentence,
                'linkedin' => $faker->sentence,
                'website' => $faker->sentence,
                'profile_company' => $faker->sentence,
                'id_users' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}