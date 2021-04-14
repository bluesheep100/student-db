<?php

namespace Tests\Unit;

use App\Models\CheckinCard;
use Tests\TestCase;

class CheckinCardTest extends TestCase
{
    /** @test */
    public function checking_in_sets_checkin_time()
    {
        $card = CheckinCard::factory()->create();

        $card->checkIn();

        $this->assertNotNull($card->checkin_time);
        $this->assertIsNumeric($card->checkin_time);
    }

    /** @test */
    public function checking_out_creates_a_log()
    {
        $card = CheckinCard::factory()->checkedIn()->create();

        $card->checkOut();

        $this->assertNotEmpty($card->logs);
        $this->assertNotNull($card->logs()->first()->checkout_time);
    }

    /** @test */
    public function checking_out_resets_checkin_time()
    {
        $card = CheckinCard::factory()->checkedIn()->create();

        $card->checkOut();

        $this->assertNull($card->checkin_time);
    }
}
