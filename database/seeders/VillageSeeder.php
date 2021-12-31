<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Village;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Village::insert([
            ['name' => 'Kayu Agung'],
            ['name' => 'Kayu Bongkok'],
            ['name' => 'Pisangan Jaya'],
            ['name' => 'Pondok Jaya'],
            ['name' => 'Sarakan'],
            ['name' => 'Karet'],
            ['name' => 'Mekar Jaya'],
            ['name' => 'Sepatan'],
        ]);
    }
}
