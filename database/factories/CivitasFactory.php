<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\civitas>
 */
class CivitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $faker = Faker::create('id_ID');
        return [
            'nama_lengkap' => fake()->name(),
            'jenis_kelamin' => fake()->words(),
            'tempat_lahir'=> fake()->city(),
            'tanggal_lahir' => fake()->date()
        ];
    }
}
