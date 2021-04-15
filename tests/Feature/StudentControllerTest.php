<?php

namespace Tests\Feature;

use App\Models\User;
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
}
