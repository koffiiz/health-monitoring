<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WaterIntake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


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

        $waterIntakes = WaterIntake::whereDate('created_at', Carbon::today())->get();

        foreach ($waterIntakes as $key => $waterIntake) {
           $totalWaterIntake += $waterIntake->water_intake;
        }

        return view('dashboard', [
            'user' => $user,
            'userData' => $userData,
            'totalWaterIntake' => $totalWaterIntake
        ]);
    }

}
