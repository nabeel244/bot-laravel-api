<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyCipher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',           // Allow mass assignment for the 'code' field
        'reward',         // Add other fields as needed
        'valid_for',
        'morse_code'
    ];
}
