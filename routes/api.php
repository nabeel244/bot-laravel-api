<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClickerController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\ReferralTaskController;
use App\Http\Controllers\TelegramUserController;
use App\Http\Controllers\UserMissionController;
use App\Http\Controllers\UserTaskController;
use App\Http\Controllers\DailyCipherController;
use App\Http\Controllers\DailyComboController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ExchangeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Public routes
Route::post('/auth/telegram-user', [AuthController::class, 'telegramUser']);

// popup messages
Route::get('/popups', [PopupController::class, 'index']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::put('user/update', [AuthController::class, 'updateUser']);
    Route::get('referred-users', [TelegramUserController::class, 'referredUsers']);

    // Clicker game routes
    Route::prefix('clicker')->group(function () {
        // Sync user data
        Route::get('/sync', [ClickerController::class, 'sync']);

        // Tapping
        Route::post('/tap', [ClickerController::class, 'tap']);

        // Boosters
        Route::post('/buy-booster', [ClickerController::class, 'buyBooster']);

        // Booster packs
        Route::post('/buy-booster-pack', [ClickerController::class, 'buyBoosterPack']);

        // Daily tasks
        Route::get('/daily-tasks', [ClickerController::class, 'listDailyTasks']);
        Route::post('/claim-daily-task', [ClickerController::class, 'claimDailyTaskReward']);

        // Regular tasks
        Route::get('tasks', [UserTaskController::class, 'index']);
        Route::post('tasks/{task}', [UserTaskController::class, 'store']);
        Route::post('tasks/{task}/claim', [UserTaskController::class, 'claim']);

        // Referral tasks
        Route::get('referral-tasks', [ReferralTaskController::class, 'index']);
        Route::post('referral-tasks/{task}/complete', [ReferralTaskController::class, 'complete']);

        // Leaderboard
        Route::get('/leaderboard', [ClickerController::class, 'listLeaderboard']);

        // Daily booster (energy restore)
        Route::post('/use-daily-booster', [ClickerController::class, 'useDailyBooster']);

        // Set ton wallet
        Route::post('/set-ton-wallet', [ClickerController::class, 'setTonWallet']);

        // Missions
        Route::get('missions', [UserMissionController::class, 'index']);

        Route::post('mission-levels/{missionLevel}', [UserMissionController::class, 'store']);

        Route::post('/test', function (Request $request) {
            $request->validate([
                'hash' => 'required|string',
                'source' => 'required|string',
                'destination' => 'required|string',
                'amount' => 'required|numeric',
                'amountInNano' => 'required|string',
            ]);
            $response = Http::get("https://testnet.toncenter.com/api/v3/transactionsByMessage", [
                'msg_hash' => $request->hash,
                'limit' => 1,
                'offset' => 0,
                'sort' => 'desc',
            ]);
            $body = $response->json();
            if (!$response->ok() || !isset($body['transactions'][0]['out_msgs'][0])) {
                return response()->json(['message' => 'Transaction not found'], 404);
            }
            $outMsg = $body['transactions'][0]['out_msgs'][0];
            $isValid = $outMsg['value'] === $request->amountInNano
                && strcasecmp($outMsg['source'], $request->source) === 0
                && strcasecmp($outMsg['destination'], $request->destination) === 0;
            return [
                'source' => $outMsg['source'],
                'destination' => $outMsg['destination'],
                'value' => $outMsg['value'],
                'is_valid' => $isValid
            ];
        });
    });

    Route::get('levels', [LevelController::class, 'index']);

    Route::post('daily-cipher', [DailyCipherController::class, 'claim']);

///////////Market Api ////
Route::get('market/cards', [MarketController::class, 'getMarketCards']);
Route::post('market/click', [MarketController::class, 'clickCard']);


// daily combo api ///
Route::get('daily-combo/cards', [DailyComboController::class, 'getDailyCards']);
Route::post('daily-combo/unlock-card', [DailyComboController::class, 'unlockCard']);
Route::post('daily-combo/upload-cards', [DailyComboController::class, 'uploadCards']);


// become Exchange CEO
Route::get('exchanges', [ExchangeController::class, 'index']);
Route::post('sign-contract', [ExchangeController::class, 'signContract']);
});
