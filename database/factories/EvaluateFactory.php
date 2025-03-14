<?php

namespace Database\Factories;

use App\Models\Enterprise;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluate>
 */
class EvaluateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectIds = Project::pluck('id')->toArray();
        // $enterpriseIds = Enterprise::pluck('id')->toArray();
        $enterpriseIds = Enterprise::limit(100)->pluck('id')->toArray();
        return [
            'project_id' => null,
            'enterprise_id' => null,
            'title' => $this->faker->sentence(6),
            'score' => $this->faker->randomFloat(2, 0, 100),
            'evaluate' => $this->faker->paragraph(3, true)
        ];
    }
}
