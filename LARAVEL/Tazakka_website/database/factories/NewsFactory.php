<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(2,8)),
            'user_id' => mt_rand(0, 10),
            'category_id'=>mt_rand(0, 3),
            'slug'=>$this->faker->slug(),
            'kutipan'=>$this->faker->paragraph(),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
        ];
    }
}
