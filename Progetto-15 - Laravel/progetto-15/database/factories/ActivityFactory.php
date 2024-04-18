<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $day = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $status = ['Active', 'Cancelled', 'Completed'];
        $difficulty = ['Beginner', 'Intermediate', 'Advanced'];

        return [
            'name' => fake()->text(30),
            'description' => fake()->text(200),
            'time' => random_int(1, 4),
            'day' => fake()->randomElement($day),
            'status' => fake()->randomElement($status),
            'difficulty' => fake()->randomElement($difficulty),
            'goal' => fake()->text(200),
            'course_id' => Course::get()->random()->id,
        ];
    }
}
