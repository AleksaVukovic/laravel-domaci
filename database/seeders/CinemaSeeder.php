<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $c1=Cinema::create(['naziv'=>'Usce','adresa'=>'Bulevar Mihaila Pupina 4',]);
       $c1=Cinema::insert(['naziv'=>'Delta','adresa'=>'Jruija Gagarina 16',]);

    }
}
