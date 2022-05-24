<?php

namespace Database\Factories;

use App\Models\Fact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fact>
 */
class FactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model
     * 
     * @var string
     */
    protected $model = Fact::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fact' => $this->faker->paragraph,
            'created_at' => now(),
        ];
    }
}
