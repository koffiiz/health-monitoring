<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WaterIntake;
use App\Models\Activity;

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

        $user = Auth::user();

        return view('activity-tracker', ['user' => $user]);
    }

    public function notification() {

        $user = Auth::user();

        return view('notification', ['user' => $user]);
    }

    public function waterIntake() {
        return view('water-intake');
    }   

    public function waterIntakeUpdate(Request $request) {
        $user = Auth::user();

        $waterIntakeCreate = WaterIntake::create([
            'user_id' => $user->id,
            'water_intake' => $request->water_intake
        ]);

        $activity = Activity::create([
            'user_id' => $user->id,
            'activity_type' => 'water',
            'activity_title' => "Drinking $request->water_intake ml of Water"
        ]);

        return redirect()->back()->with('message', "You Successfully Drink $request->water_intake ml" );
    }

}
