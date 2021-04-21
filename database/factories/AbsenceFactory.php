<?php

namespace Database\Factories;

use App\Models\Absence;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Absence::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'student_id' => function () {
                return Student::factory()->create()->id;
            },
            'type' => 'other',
            'date' => Carbon::today(),
        ];
    }
}
