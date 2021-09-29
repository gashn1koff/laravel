<?php

namespace Database\Factories;


use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class WorkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return array(
            'name'=>$this->faker->name(),
            'second_name'=>$this->faker->lastName(),
            'age'=>$this->faker->randomDigit(),
            'position'=>$this->faker->jobTitle(),
            'department'=>$this->faker->streetName(),
            'active'=>$this->faker->boolean(3)
        );
    }
}
