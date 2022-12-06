<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Activity;
use App\Models\WaterIntake;
use App\Models\SleepTracker;
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

        $user = Auth::user();
        
        $userActivity = Activity::where('user_id', $user->id)->latest()->take(5)->get();
        $date = Carbon::now()->subDays(7);

        // Get Last 7 Days Water Activity
        $lastWeekWaterActivity = WaterIntake::where('created_at', '>=', $date)->take(7)->get()->groupBy(function($item) {
            return $item->created_at->format('Y-m-d');
        });

        // Get Last 7 Days Sleep Activity
        $lastWeekSleepActivity = SleepTracker::where('created_at', '>=', $date)->take(7)->get()->groupBy(function($item) {
            return $item->created_at->format('Y-m-d');
        });

        // dd($lastWeekWaterActivity);

        return view('activity-tracker', 
            [
                'user' => $user, 
                'user_activity' => $userActivity, 
                'lastWeekWaterActivity' => $lastWeekWaterActivity,
                'lastWeekSleepActivity' => $lastWeekSleepActivity
            ]);
    }

    public function notification() {

        $user = Auth::user();
        $userActivity = Activity::where('user_id', $user->id)->latest()->get();;


        return view('notification', ['user' => $user, 'userActivity' => $userActivity]);
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

    public function sleepTracker() {
        $user = Auth::user();

        $latestSleepTracker = $user->sleep->where('sleep_end', null)->last();
        
        return view('sleep-tracker', ['latestSleepTracker' => $latestSleepTracker] );
    }

    public function sleepTrackerUpdate(Request $request) {
        $user = Auth::user();
        $latestSleepTracker = $user->sleep->last();
        $status = '';

        if($request->sleep_status == 'sleep_end') {
            $latestSleepTracker->sleep_end = Carbon::now();
            $latestSleepTracker->save();
            $status = "Ended";

            $activity = Activity::create([
                'user_id' => $user->id,
                'activity_type' => 'sleep',
                'activity_title' => "You Wakeup"
            ]);

        }
        else {
            $sleepTracker = SleepTracker::create([
                'user_id' => $user->id,
                'sleep_start' => Carbon::now()
            ]);

            $activity = Activity::create([
                'user_id' => $user->id,
                'activity_type' => 'sleep',
                'activity_title' => "You Started To Sleep"
            ]);

            $status = "Started";
        }

        return redirect()->back()->with('message', "You $status Your Sleep" );
    }

}
