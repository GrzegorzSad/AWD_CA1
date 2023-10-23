<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('albums')->insert([
                'name' => $faker->sentence(3),
                'artist' => $faker->name,
                'description' => $faker->text,
                'release_date' => $faker->date,
            ]);
        }
    }
}