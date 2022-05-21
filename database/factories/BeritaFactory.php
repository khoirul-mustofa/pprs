<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'excerpt' => $this->faker->paragraph(1,3),
            'konten' => $this->faker->paragraph(mt_rand(10,30)),
            'user_id' =>mt_rand(1,5),
            'kategori_id' =>mt_rand(1,5),
        ];
    }
}
