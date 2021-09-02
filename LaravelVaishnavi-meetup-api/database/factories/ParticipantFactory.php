<?php

namespace Database\Factories;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ParticipantFactory extends Factory
{
  /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
  protected $model = Participant::class;

  /**
    * Define the model's default state.
    *
    * @return array
    */
  public function definition()
  {
    return [
      'name' => $this->faker->name,
      'age' => $this->faker->randomDigit,
      'dob' => $this->faker->dateTime(),
      'profession' => $this->faker->jobTitle,
      'locality' => $this->faker->streetName,
      'number_of_guests' => $this->faker->randomDigit,  
      'address' => $this->faker->address
    ];

  }
}