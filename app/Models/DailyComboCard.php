<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyComboCard extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'title', 'description', 'cost', 'reward', 'date'];

    public function unlockedByUsers()
    {
        return $this->hasMany(UnlockedComboCard::class);
    }
}
