<?php

namespace Database\Seeders;

use App\Models\Director;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m1=Director::create(['ime'=>'Stiven','prezime'=>'Spilberg','movie_id'=>1,'br_filmova'=>12]);
        $m2=Director::create(['ime'=>'Martin','prezime'=>'Skorceze','movie_id'=>1,'br_filmova'=>6]);
    }
}
