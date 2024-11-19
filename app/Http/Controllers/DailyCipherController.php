<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DailyCipher;
use App\Models\TelegramUser;
use Carbon\Carbon;
use Auth;

class DailyCipherController extends Controller
{
    public function claim(Request $request)
    {
        try {
            $request->validate([
                'code' => 'required|string',
            ]);
    
            if (!Auth::check()) {
                return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
            }
    
            $user = Auth::user();
            $today = Carbon::today();
            $code = $request->input('code');
    
            // Find today's cipher code
            $cipher = DailyCipher::where('code', $code)
                ->whereDate('valid_for', $today)
                ->first();
    
            if (!$cipher) {
                return response()->json(['success' => false, 'message' => 'Invalid or expired code'], 400);
            }
    
            // Check if the user has already redeemed today
            if ($user->last_daily_cipher_redeem && $user->last_daily_cipher_redeem->isSameDay($today)) {
                return response()->json(['success' => false, 'message' => 'You have already claimed today\'s reward']);
            }
    
            // Award the reward
            $user->balance += $cipher->reward;
            $user->last_daily_cipher_redeem = $today;
            $user->save();
    
            return response()->json(['success' => true, 'reward' => $cipher->reward, 'message' => 'Reward claimed successfully!']);
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            \Log::error('Error in claim method: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
            // Return a generic error response
            // return response()->json(['success' => false, 'message' => 'An error occurred. Please try again later.'], 500);
        }
    }
    
    
}
