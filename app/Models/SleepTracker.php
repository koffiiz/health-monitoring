<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SleepTracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'sleep_start',
        'sleep_end',
        'user_id'
    ];
    
}
