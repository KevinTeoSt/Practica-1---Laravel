<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


            'FirstName'=>$this->faker->firstName(),
            'SecondName'=>$this->faker->firstName(),
            'LastName'=>$this->faker->lastName(),
            'DateOfBirth'=>$this->faker->dateTime(),
            'Address'=>$this->faker->address(),
            'Email'=>$this->faker->freeEmail(),
            'Dpi'=>$this->faker->buildingNumber(),
            'Cel'=>$this->faker->phoneNumber(),


        ];
    }
}
