<?php

namespace App\Models;

use App\Interfaces\Validatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

/**
 * App\Models\Student
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\StudentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $email
 * @property string $phone_number
 * @property string $address
 * @property string $zip_code
 * @property string $birthday
 * @property string $portrait
 * @property int $vacation_days
 * @property int $current_flex
 * @property string|null $meeting_times
 * @property string|null $remember_token
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Absence[] $absences
 * @property-read int|null $absences_count
 * @property-read \App\Models\CheckinCard|null $card
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCurrentFlex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereMeetingTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePortrait($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereVacationDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereZipCode($value)
 */
class Student extends Model implements Validatable
{
    use HasFactory;

    protected $guarded = ['id', 'created_at'];

    public function card(): Relation
    {
        return $this->hasOne(CheckinCard::class);
    }

    public function absences(): Relation
    {
        return $this->hasMany(Absence::class);
    }

    public static function validationRules(): array
    {
        return [
            'name' => ['required'],
            'checkin_card_id' => ['length:10'],
            'birthday' => ['required', 'date'],
        ];
    }
}
