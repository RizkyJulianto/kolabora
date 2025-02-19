<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $wallet_provider = ['dana','ovo','gopay','paypal'];
        for ($i = 0; $i < 10; $i++) {
            DB::table('rewards')->insert([
                'total_point' => $faker->numberBetween(1000, 5000),
                'point_redeemed'  => $faker->numberBetween(1000,4000),
                'total_amount'  => $faker->numberBetween(50000,100000),
                'wallet_provider'  => $wallet_provider[array_rand($wallet_provider)],
                'wallet_number'  => $faker->numberBetween(100000000000, 900000000000),
                'message'  => $faker->sentence(20),
                'id_users'  => $faker->numberBetween(1,6),
                'id_project' =>$faker->numberBetween(12,21),
                'id_company' => $faker->numberBetween(11, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
