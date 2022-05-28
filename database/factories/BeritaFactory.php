<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // mt_rand untuk mengeneret bilangan random
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->unique()->slug(),
            'excerpt' => $this->faker->paragraph(1,2),
            // 'konten' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(10,30))) . '</>',
            'konten' => collect($this->faker->paragraphs(mt_rand(10,30)))
            ->map(fn($p)=>"<p>$p</p>")
            ->implode(''),
            'user_id' =>mt_rand(1,3),
            'kategori_id' =>mt_rand(1,3),
        ];
    }
}
