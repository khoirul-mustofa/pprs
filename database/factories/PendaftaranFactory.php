<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status-id' => mt_rand(1,2),
            'nama' =>$this->faker->name(),
            'tmplahir' => $this->faker->slug(),
            'tgllahir' => now(),
            'jkl' => $this->faker->genere('laki-laki','perempuan'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        return [
            // mt_rand untuk menggeneret bilangan random
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
        return [
            'name' => $this->faker->name(),
            'username' =>$this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
