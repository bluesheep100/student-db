<?php

namespace Database\Factories;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('secret'),
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'zip_code' => $this->faker->postcode,
            'birthday' => Carbon::now()->subYears(18 + $this->faker->numberBetween(1, 10)),
            'remember_token' => Str::random(10),
        ];
    }
}
