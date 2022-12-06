<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\WaterIntake;
use App\Models\SleepTracker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index() {

        $user = Auth::user();
        
        $BMIData = calculateBMI($user);

        $userData = [
            'BMI' => [
                'value' => $BMIData['value'],
                'message' => $BMIData['message']
            ],
        ];


        $totalWaterIntake = 0;

        $waterIntakes = WaterIntake::where('user_id', $user->id)->whereDate('created_at', Carbon::today())->get();
        
        foreach ($waterIntakes as $key => $waterIntake) {
            $totalWaterIntake += $waterIntake->water_intake;
        }
        
        $totalSleep = null;
        $sleepTrackers = SleepTracker::where('user_id', $user->id)->whereDate('created_at', Carbon::today())->get();

        foreach ($sleepTrackers as $key => $sleepTracker) {
            $start = new Carbon($sleepTracker->sleep_start);
            $end = new Carbon($sleepTracker->sleep_end);
            $sleepDuration = $start->diff($end)->format('%H:%I:%S');
            $secs = strtotime($totalSleep)-strtotime("00:00:00");
            $totalSleep = date("H:i:s", strtotime($sleepDuration)+$secs);
        }

        $calorieIntake = 66.45 + ( 13.75 * $user->weight) + (5.003 * $user->height) - (6.755 * $user->age());

        return view('dashboard', [
            'user' => $user,
            'userData' => $userData,
            'totalWaterIntake' => $totalWaterIntake,
            'waterIntakes' => $waterIntakes,
            'totalSleep' => gmdate("H:i:s", strtotime($totalSleep)),
            'calorieIntake' => $calorieIntake
        ]);
    }

}
