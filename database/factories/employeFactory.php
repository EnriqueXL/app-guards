<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employe>
 */
class employeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre' => $this->faker->name(),
            'apellido_paterno' => $this->faker->lastName(),
            'apellido_materno' => $this->faker->lastName(),
            'activo' => $this->faker->boolean(),
            'email' => $this->faker->unique()->safeEmail(),
            'foto_perfil' => $this->faker->imageUrl(),
            'telefono' => substr($this->faker->phoneNumber(), 0, 10),
            'direccion' => $this->faker->address(),
            'id_rol' => $this->faker->numberBetween(1, 3),
            'fecha_contratacion' => $this->faker->date(),
            'created_at' => $this->faker->dateTime(),
            // 'updated_at' => $this->faker->dateTime(),
        ];
    }
}
