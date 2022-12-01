<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionsController extends Controller
{
    public function bmi_index() {
        $user = Auth::user();

        $BMIData = calculateBMI($user);

        return view('bmi-details', ['BMIData' => $BMIData]);
    }

    public function editProfile() {
        $user = Auth::user();

        return view('update-profile', ['user' => $user]);
    }

    // Update Profile
    public function updateProfile(Request $request) {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'birthday' => ['required'],
            'weight' => ['required'],
            'height' => ['required'],
        ]);

        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->weight = $request->weight;
        $user->height = $request->height;
        $user->save();
        
        return redirect()->guest('profile')->with('message', 'Profile Sucessfully Updated');
    }

    public function activityTracker() {
        return view('activity-tracker');
    }

    public function notification() {
        return view('notification');
    }

}
