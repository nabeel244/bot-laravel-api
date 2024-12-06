<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnlockedComboCard extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'daily_combo_card_id'];

    public function card()
    {
        return $this->belongsTo(DailyComboCard::class, 'daily_combo_card_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
