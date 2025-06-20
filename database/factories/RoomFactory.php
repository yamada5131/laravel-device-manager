<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
final class RoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Lab '.$this->faker->unique()->numberBetween(1, 100),
            'grid_rows' => $this->faker->numberBetween(5, 10),
            'grid_cols' => $this->faker->numberBetween(5, 10),
        ];
    }
}
