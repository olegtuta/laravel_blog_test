<?php

namespace Database\Factories;

use App\Models\Article;
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

    protected $model = Article::class;

    public function definition()
    {
        $categories = ['soc', 'law', 'another'];
        return [
            'user_id' => rand(1, 5),
            'category' => $categories[array_rand($categories, 1)],
            'title' => $this->faker->jobTitle,
            'body' => $this->faker->realText,
            'created_at' => $this->faker->dateTime()
        ];
    }
}
