<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailyComboCard;
use App\Models\UnlockedComboCard;
use Illuminate\Http\Request;

class DailyComboController extends Controller
{

    public function uploadCards(Request $request)
{
    $request->validate([
        'cards' => 'required|array',
        'cards.*.category' => 'required|string',
        'cards.*.title' => 'required|string',
        'cards.*.description' => 'nullable|string',
        'cards.*.cost' => 'required|integer|min:0',
        'cards.*.reward' => 'required|integer|min:0',
        'date' => 'required|date', 
    ]);

    $date = $request->input('date');
    $cards = $request->input('cards');

    foreach ($cards as $cardData) {
        DailyComboCard::create([
            'category' => $cardData['category'],
            'title' => $cardData['title'],
            'description' => $cardData['description'] ?? '',
            'cost' => $cardData['cost'],
            'reward' => $cardData['reward'],
            'date' => $date,
        ]);
    }

    return response()->json(['message' => 'Cards uploaded successfully']);
}

public function getDailyCards(Request $request)
{
    $user = $request->user(); // Assuming `auth:api` middleware is applied
    $cards = DailyComboCard::where('date', date('Y-m-d'))->get();

    // Add unlocked status for each card
    $unlockedCards = UnlockedComboCard::where('user_id', $user->id)
        ->pluck('daily_combo_card_id')
        ->toArray();

    $cards = $cards->map(function ($card) use ($unlockedCards) {
        $card->is_unlocked = in_array($card->id, $unlockedCards);
        return $card;
    });

    return response()->json([
        'cards' => $cards,
        'claimed_rewards' => $unlockedCards, // Add this
    ]);
}


    public function unlockCard(Request $request)
{
    $user = $request->user();
    $cardId = $request->input('card_id');

    $card = DailyComboCard::findOrFail($cardId);

    // Check if user already unlocked the card
    if ($user->unlockedCards()->where('daily_combo_card_id', $cardId)->exists()) {
        return response()->json(['message' => 'Card already unlocked'], 400);
    }

    // Check if user has enough balance
    if ($user->balance < $card->cost) {
        return response()->json(['message' => 'Insufficient balance'], 400);
    }

    // Deduct the cost and reward the user
    $user->balance -= $card->cost;
    $user->save();

    // Track the unlocked card
    UnlockedComboCard::create([
        'user_id' => $user->id,
        'daily_combo_card_id' => $card->id,
    ]);

    return response()->json([
        'message' => 'Card unlocked successfully',
        'new_balance' => $user->balance,
        'reward' => $card->reward,
    ]);
}

}
