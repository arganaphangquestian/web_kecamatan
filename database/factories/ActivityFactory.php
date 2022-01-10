<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\ActivityType;
use App\Models\Village;
use Illuminate\Support\Collection;
use Faker\Factory as Faker;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'name' => $this->faker->unique()->company(),
            'amount' => 2_000_000_000,
            'village_id' => Arr::random(collect(Village::all())->map(function($item) {
                return $item->id;
            })->toArray()),
            'activity_type_id' => Arr::random(collect(ActivityType::all())->map(function($item) {
                return $item->id;
            })->toArray()),
            'volume' => Arr::random([12, 23, 34, 67, 133, 63, 69, 61, 56]),
            'location' => $faker->latitude() . ';'. $faker->longitude(),
            'founding' => 'APBD 2022',
            'start' => 2021,
        ];
    }
}
