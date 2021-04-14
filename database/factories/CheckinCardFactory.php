<?php

namespace Database\Factories;

use App\Models\CheckinCard;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CheckinCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CheckinCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id' => Str::random(10),
            'student_id' => function () {
                return Student::factory()->create()->id;
            },
        ];
    }

    public function checkedIn(): Factory
    {
        return $this->state(function () {
            return [
                'checkin_time' => time(),
            ];
        });
    }
}
