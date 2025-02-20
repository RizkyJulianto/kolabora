<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class FindJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('project')->insert([
                'name_project' => $faker->unique()->name,
                'description_project'  => $faker->sentence,
                'project_type'  => 'Full Time',
                'deadline'  => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'),
                'skills'  => $faker->sentence,
                'collaboration_type'  => 'Team',
                'total_members'  => $faker->numberBetween(1, 20),
                'experience'  => $faker->word,
                'experience_year'  => $faker->numberBetween(1, 10),
                'date_project'  => $faker->date('Y-m-d'),
                'salary'  => $faker->numberBetween(3000000, 20000000),
                'id_company' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}