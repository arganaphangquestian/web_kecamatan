<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\ActivityType;
use App\Models\Village;
use Illuminate\Support\Collection;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

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
            'location' => Arr::random([
                '-6.121780040558322;106.57751083374023',
                '-6.11631817347278;106.5915870666504',
                '-6.133898358679618;106.55982971191408',
                '-6.133386322638398;106.56103134155275',
                '-6.11853706370808;106.55639648437501',
            ]),
            'founding' => 'APBD 2022',
            'start' => 2021,
        ];
    }
}
