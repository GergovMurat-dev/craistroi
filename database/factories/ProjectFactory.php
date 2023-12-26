<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'card_description' => $this->faker->text,
            'card_image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'before' => json_encode($this->faker->words), // Random array converted to JSON
            'after' => json_encode($this->faker->words), // Random array converted to JSON
        ];
    }
}
