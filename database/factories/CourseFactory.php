<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Platform;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence,
            'book' => rand(0, 1),
            'price' => rand(0, 1) ? rand(1, 100) : 0.00,
            'year' => rand(2010, 2021),
            'description' => fake()->paragraph(4),
            'link' => fake()->url(),
            'submitted_by' => User::all()->random()->id,
            'duration' => rand(0, 2),
            'level' => rand(0, 1),
            'platform_id' => Platform::all()->random()->id,
        ];
    }
}
