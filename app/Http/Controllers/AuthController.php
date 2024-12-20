<?php

namespace App\Http\Controllers;

use App\Models\TelegramUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function telegramUser(Request $request)
    {
        $validated = $request->validate([
            'telegram_id' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'username' => 'nullable|string',
            'referred_by' => 'sometimes|nullable',
        ]);

        $validated['balance'] = 5_000;

        if ($request->get('referred_by') != null && $request->get('referred_by') != $request->get('telegram_id')) {
            $isUserExists = TelegramUser::where('telegram_id', $request->get('telegram_id'))->exists();
            $referredBy = TelegramUser::where('telegram_id', $request->get('referred_by'))->first();

            if ($referredBy && !$isUserExists) {
                $increaseBy = config('clicker.referral.base.welcome');
                if ($increaseBy > 0) {
                    $referredBy->increment('balance', $increaseBy);
                    $validated['balance'] += $increaseBy;
                }
            }
        } else {
            $validated['referred_by'] = null;
        }

        $user = TelegramUser::firstOrCreate(
            ['telegram_id' => $request->get('telegram_id')],
            $validated
        );

        $user->updateLoginStreak();

        $token = $user->createToken($user->telegram_id);

        return response()->json([
            'first_login' => $user->wasRecentlyCreated,
            'token' => $token->plainTextToken,
        ]);
    }

    public function updateUser(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:telegram_users,username,' . auth()->id(),
        ]);

        // Get the currently authenticated user
        $user = $request->user();

        // Ensure the user exists in TelegramUser model
        if (!$user instanceof TelegramUser) {
            return response()->json([
                'message' => 'Authenticated user is not valid',
            ], 403);
        }

        // Update user details
        $user->update($validatedData);

        // Return success response
        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
        ], 200);
    }
}
