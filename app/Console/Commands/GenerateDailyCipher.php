<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\DailyCipher;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Mail\DailyCipherCreated;
use Illuminate\Support\Facades\Mail;

class GenerateDailyCipher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:generate-daily-cipher';
    protected $signature = 'cipher:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          // Generate a new random code
          $cipherData = DailyCipher::create([
            'code' => Str::random(8),      // Random 8-character code
            'morse_code' => $this->generateMorseCode(Str::random(4)), // Convert code to Morse
            'reward' => 1000000,           // Default reward
            'valid_for' => Carbon::today(), // Set date to today
        ]);
    
        Mail::to('nabeelmuhammad243@gmail.com')->send(new DailyCipherCreated($cipherData));
        $this->info('Daily cipher code generated.');
    }

    private function generateMorseCode($text)
    {
        // Simple conversion for text to Morse code (implement Morse logic here)
        return str_replace(['A', 'B', 'C'], ['·−', '−···', '−·−·'], strtoupper($text)); // Example
    }
}
