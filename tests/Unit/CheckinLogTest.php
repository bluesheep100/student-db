<?php

namespace Tests\Unit;

use App\Models\Absence;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Tests\TestCase;

class CheckinLogTest extends TestCase
{
    /** @test */
    public function absence_can_be_created_with_all_valid_types()
    {
        Absence::factory()->count(7)->state(new Sequence(
            ['type' => 'vacation'],
            ['type' => 'sick'],
            ['type' => 'homework'],
            ['type' => 'time_off'],
            ['type' => 'school'],
            ['type' => 'missing'],
            ['type' => 'other'],
        ))->create();

        $this->assertDatabaseCount('absences', 7);
    }
}
