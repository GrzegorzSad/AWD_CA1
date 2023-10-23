<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlbumsSeeder;
use Database\Seeders\SongsSeeder;
use Database\Seeders\PlaylistsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlbumSeeder::class,
            SongSeeder::class,
            PlaylistSeeder::class,
            // Add other seeders here
        ]);
    }
}