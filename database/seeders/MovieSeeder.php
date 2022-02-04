<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m1=Movie::create(['trajanje'=>120,'naslov'=>'Batman','zanr'=>'akcija','cinema_id'=>1]);
        $m2=Movie::create(['trajanje'=>120,'naslov'=>'SUperman','zanr'=>'akcija','cinema_id'=>1]);
    }
}
