<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActivityType;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityType::insert([
            [
                'slug' => 'saluran_air',
                'name' => 'Saluran Air',
            ],
            [
                'slug' => 'jembatan',
                'name' => 'Jembatan',
            ],
            [
                'slug' => 'jalan',
                'name' => 'Jalan',
            ],
            [
                'slug' => 'bangunan',
                'name' => 'Bangunan',
            ],
        ]);
    }
}
