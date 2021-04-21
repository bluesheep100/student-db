<?php

namespace Tests\Feature;

use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Tests\TestCase;

class StudentControllerTest extends TestCase
{
    /** @test */
    public function dashboard_is_only_accessible_when_authenticated()
    {
        $user = User::factory()->create();

        $guestResponse = $this->get(route('dashboard'));
        $this->actingAs($user);
        $authenticatedResponse = $this->get(route('dashboard'));

        $guestResponse->assertStatus(302);
        $authenticatedResponse->assertStatus(200);
    }

    /** @test */
    public function a_student_can_be_created()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $student = Student::factory()->make();

        $response = $this->post(route('student-create'), $student->getAttributes());

        $this->assertDatabaseHas('students', ['name' => $student->name]);
    }
}
