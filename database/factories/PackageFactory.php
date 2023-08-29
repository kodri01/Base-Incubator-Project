<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_brand' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'user_id' => $this->faker->numberBetween(1, 4),
            'image' => $this->faker->imageUrl(400, 300),
            'image2' => $this->faker->imageUrl(400, 300),
            'image3' => $this->faker->imageUrl(400, 300),
            'description' => $this->faker->text(),
        ];
    }
}