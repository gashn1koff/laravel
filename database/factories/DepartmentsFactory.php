<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_of_department'=>$this->faker->company(),
            'option'=>$this->faker->realText(),
            'count'=>$this->faker->randomDigit()
        ];
    }
}
