<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'bio' => $this->faker->paragraph(),
            'role' => $this->faker->randomElement([
                'guru', 'kepala sekolah', 'wakil kepala sekolah', 'kepala perpustakaan', 'staff penjaga'
            ]),
            'acc_number' => $this->faker->randomNumber(),
            'avatar' => '/image/teacher.jpg'
        ];
    }
}
