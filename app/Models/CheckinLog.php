<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

/**
 * App\Models\CheckinLog
 *
 * @property int $id
 * @property string $checkin_card_id
 * @property int $checkin_time
 * @property int $checkout_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CheckinCard $card
 * @method static \Database\Factories\CheckinLogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog whereCheckinCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog whereCheckinTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog whereCheckoutTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CheckinLog extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

    public function card(): Relation
    {
        return $this->belongsTo(CheckinCard::class);
    }
}
