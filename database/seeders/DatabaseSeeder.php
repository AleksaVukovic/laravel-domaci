<?php

namespace Database\Seeders;

use App\Models\Cinema;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cinema::truncate();
        Movie::truncate();
        Director::truncate();

        $this->call(CinemaSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(DirectorSeeder::class);
    }
}
