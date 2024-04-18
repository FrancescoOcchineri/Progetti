<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $instructor = User::where('role', 'instructor')->inRandomOrder()->first();
        $startDate = Carbon::now();
        $endDate = $startDate->copy()->addMonth()->addDays(rand(1, 30));

        return [
            'name' => $this->faker->text(30),
            'description' => $this->faker->text(200),
            'instructor_id' => $instructor->id,
            'room' => $this->faker->numberBetween(1, 10),
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}

