<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'summary' => $this->faker->paragraphs(3, true),
            'description' => $this->faker->paragraphs(5, true),
            'url' => 'https://fiveninesclo.com',
            'instagram' => 'samrapaport',
            'featured_image' => 'https://via.placeholder.com/1440x1080',
            'images' => [
                ['thumbnail' => 'https://via.placeholder.com/720x540', 'src' => 'https://via.placeholder.com/1440x1080'],
                ['thumbnail' => 'https://via.placeholder.com/720x540', 'src' => 'https://via.placeholder.com/1440x1080'],
                ['thumbnail' => 'https://via.placeholder.com/720x540', 'src' => 'https://via.placeholder.com/1440x1080'],
            ],
        ];
    }
}
