<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

/**
 * App\Models\CheckinCard
 *
 * @property string $id
 * @property int|null $student_id
 * @property int|null $checkin_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CheckinLog[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Student|null $student
 * @method static \Database\Factories\CheckinCardFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard whereCheckinTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckinCard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CheckinCard extends Model
{
    use HasFactory;

    protected $guarded = ['created_at'];

    public $incrementing = false;

    public function checkIn()
    {
        $this->checkin_time = time();
    }

    public function checkOut()
    {
        $this->logs()->create([
            'checkin_time' => $this->checkin_time,
            'checkout_time' => time(),
        ]);

        $this->checkin_time = null;
    }

    public function student(): Relation
    {
        return $this->belongsTo(Student::class);
    }

    public function logs(): Relation
    {
        return $this->hasMany(CheckinLog::class);
    }
}
