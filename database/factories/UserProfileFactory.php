<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'website' => fake()->randomElement(['http://laracast.com', 'https://thesnakebite.es', 'https://styde.net']),
            'job_title' => fake()->jobTitle(),
        ];
    }
}
