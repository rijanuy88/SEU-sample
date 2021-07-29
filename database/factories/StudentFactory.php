<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //add faker commands here
            // 'studentid'=> '8'.$this->faker->unique()->randomNumber,
            'studentid'=> '8'.$this->faker->unique()->numberBetween($min = 10000000, $max=90000000),
            'firstName'=> $this->faker->firstName,
            'middleName'=> $this->faker->lastName,
            'lastName'=> $this->faker->lastName,
            'address'=> $this->faker->address
            
        ];
    }
}
