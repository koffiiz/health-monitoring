<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return view('dashboard', [
            'user' => $user,
            'userData' => $userData
        ]);
    }

}
