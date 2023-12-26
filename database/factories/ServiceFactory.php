<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'card_image' => $this->faker->imageUrl(),
            'card_description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'services' => json_encode([
                'title' => $this->faker->title,
                'subtitle' => $this->faker->title,
                'image' => $this->faker->imageUrl
            ]), // Пример генерации JSON массива
        ];
    }
}
