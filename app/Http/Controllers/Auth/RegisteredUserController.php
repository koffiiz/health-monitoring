<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::STEP);
    }


    /**
     * Display the registration step.
     *
     * @return \Illuminate\View\View
     */
    public function step(Request $request) {
        return view('auth.register-step');
    }


    /**
     * Handle an incoming registration step request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function stepStore(Request $request) {

        $request->validate([
            'gender' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'string', 'max:255'],
            'weight' => ['required', 'string', 'max:255'],
            'height' => ['required', 'string', 'max:255'],
        ]);

        $user = Auth::user();

        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->weight = $request->weight;
        $user->height = $request->height;
        $user->save();

        return redirect(RouteServiceProvider::STEP_WELCOME);
    }


    /**
     * Display the registration welcome.
     *
     * @return \Illuminate\View\View
     */
    public function stepWelcome() {

        $user = Auth::user();

        return view('auth.register-welcome', ["user" => $user]);
    }
}
