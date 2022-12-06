<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Activity;
use App\Models\WaterIntake;
use App\Models\SleepTracker;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'gender',
        'birthday',
        'weight',
        'height',
        'is_complete'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the water for the of the user.
     */
    public function water_intake()
    {
        return $this->hasMany(WaterIntake::class);
    }
    
    /**
     * Get the Activiy of the user.
     */
    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * Get the Sleep Tracker of the user.
     */
    public function sleep()
    {
        return $this->hasMany(SleepTracker::class);
    }

    /**
     * Accessor for Age.
     */
    public function age()
    {
        return Carbon::parse($this->attributes['birthday'])->age;
    }
}
