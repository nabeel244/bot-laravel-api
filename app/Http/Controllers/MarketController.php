<?php

namespace App\Http\Controllers;

use App\Models\MarketCard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    // public function getMarketCards()
    // {
    //     // Fetching market cards from database
    //     $marketCards = MarketCard::all();

    //     return response()->json($marketCards);
    // }
    public function getMarketCards()
    {
        // Sample static data for market cards
        $marketCards = [
            [
                'title' => 'CEO',
                'img' => '/images/market_ceo.png',
                'profit' => 100,
                'level' => 0,
                'pointsNeeded' => 3100,
            ],
            [
                'title' => 'Marketing',
                'img' => '/images/market_ceo.png',
                'profit' => 70,
                'level' => 0,
                'pointsNeeded' => 1100,
            ],
            [
                'title' => 'IT Team',
                'img' => '/images/market_ceo.png',
                'profit' => 240,
                'level' => 0,
                'pointsNeeded' => 0,
            ],
            [
                'title' => 'Support Team',
                'img' => '/images/market_ceo.png',
                'profit' => 750,
                'level' => 0,
                'pointsNeeded' => 0,
            ],
        ];

        return response()->json($marketCards);
    }

    public function clickCard(Request $request)
    {
        $userId = $request->input('user_id'); // User ID to identify who is clicking
        $cardId = $request->input('card_id'); // The ID of the clicked market card

        $card = MarketCard::find($cardId); // Find the card in the database

        if (!$card) {
            return response()->json(['error' => 'Card not found'], 404);
        }

        // Assuming you have a User model to update the user's balance
        $user = TelegramUser::find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Award the rewards to the user
        $user->balance += $card->profit; // Assuming the card has a `profit` field
        $user->save();

        return response()->json([
            'message' => 'Card clicked and rewards granted',
            'new_balance' => $user->balance,
            'card' => $card,
        ]);
    }
}
