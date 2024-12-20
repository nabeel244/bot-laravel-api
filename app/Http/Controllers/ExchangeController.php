<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exchange;
use App\Models\TelegramUser;

class ExchangeController extends Controller
{
    public function index()
    {
        return response()->json(Exchange::all());
    }

    public function signContract(Request $request)
    {
        $request->validate([
            'exchange_id' => 'required|exists:exchanges,id',
        ]);

        $user = auth()->user(); // Assuming authentication is set up
        $user->selected_exchange_id = $request->exchange_id;
        $user->save();

        $exchange = Exchange::find($request->exchange_id);

        return response()->json([
            'message' => "You've signed a contract with {$exchange->name}",
            'exchange' => $exchange,
        ]);
    }
}
