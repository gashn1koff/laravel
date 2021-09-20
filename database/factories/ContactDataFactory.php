<?php

namespace Database\Factories;

use App\Models\ContactData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'login'=>$this->faker->randomLetter(),
            'password'=>$this->faker->password(),
            'telephone'=>$this->faker->email()
        ];
    }
}
