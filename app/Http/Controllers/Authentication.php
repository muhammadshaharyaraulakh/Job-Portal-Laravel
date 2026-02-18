<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Authentication extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:12',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,}$/',
            ],
            'mobile' => 'required|string|regex:/^\+923\d{9}$/|unique:users',
            'updates' => 'nullable|boolean',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 12 characters long.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
            'mobile.required' => 'Mobile number is required.',
            'mobile.regex' => 'Please enter a valid mobile number starting with +923 followed by 9 digits.',
            'mobile.unique' => 'This mobile number is already registered.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'status' => $request->has('updates') ? 1 : 0,
        ]);

        Auth::login($user);

        return redirect('/');
    }


public function login(Request $request)
{
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);


    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors([
            'email' => 'Email not found.'
        ])->withInput();
    }

    if (!Hash::check($request->password, $user->password)) {
        return back()->withErrors([
            'password' => 'Incorrect password.'
        ])->withInput();
    }
    $remember = $request->has('remember');

    Auth::login($user, $remember);

    return redirect()->route('/');
}

}
