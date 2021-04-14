<?php

namespace Database\Factories;

use App\Models\CheckinCard;
use App\Models\CheckinLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckinLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CheckinLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'checkin_card_id' => function () {
                return CheckinCard::factory()->create()->id;
            },
            'checkin_time' => time(),
            'checkout_time' => time() - (8*3600),
        ];
    }
}
