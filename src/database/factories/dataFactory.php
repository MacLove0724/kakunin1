<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class dataFactory extends Factory
{
      
      protected $model = data::class;
       
     
    public function definition()
    {
        return [
           'lname' => $this->faker->lastname(),
           'fname' => $this->faker->firstname(),
           'sex' => $this->faker->randomElement($array=['男性','女性']),
           'email' => $this->faker->email(),
           'post' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
           'address' => $this->faker->address(),
           'building' => $this->faker->secondaryAddress(),
           'opinion' => $this->faker->sentence(),
        ];
    }
}
