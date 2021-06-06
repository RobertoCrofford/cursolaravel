<?php

namespace Database\Factories;

use App\Models\curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Desarrollo Web','Diseño web'])
        ];
    }
}
