<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = ['Confirmed', 'Pending', 'Cancelled'];

        return [
            'user_id' => User::get()->random()->id, 
            'activity_id' => Activity::get()->random()->id, 
            'status' => $this->faker->randomElement($status)
        ];
    }
}
