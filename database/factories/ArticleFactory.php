<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(5, 9));
        return [
            'title' => $title,
            'slug' => fake()->unique()->slug(),
            'content' => fake()->paragraphs(rand(10, 30), true),
            'image' => fake()->imageUrl(640, 480, 'nature'),
            'author_id' => \App\Models\User::factory(),
            'category_id' => \App\Models\Category::factory(),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),

        ];
    }
}
