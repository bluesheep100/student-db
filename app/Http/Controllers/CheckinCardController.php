<?php

namespace App\Http\Controllers;

use App\Models\CheckinCard;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CheckinCardController extends Controller
{
    public function edit(): View
    {
        return view('checkin');
    }

    public function update()
    {
        request()->validate([
            'card_id' => ['required', 'numeric', Rule::exists('checkin_cards', 'id')],
        ]);

        $card = CheckinCard::find(request('card_id'));

        $card->checkIn();
        return redirect(route('checkin'))->with('status', 'Du er blevet checket ind.');
    }
}
