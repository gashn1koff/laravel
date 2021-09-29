<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
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
            'name_of_departments'=>$this->faker->company(),
            'options'=>$this->faker->streetName(),
            'count_of_workers'=>$this->faker->randomDigit()
        ];
    }
}
