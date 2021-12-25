<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\ActivityType;
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
            'village' => 'Konoha',
            'activity_type_id' => Arr::random(collect(ActivityType::all())->map(function($item) {
                return $item->id;
            })->toArray()),
            'volume' => 234,
            'founding' => 'APBD 2022',
            'start' => 2021,
        ];
    }
}
