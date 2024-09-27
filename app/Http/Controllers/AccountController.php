<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // This method will show user registration page
     public function registration()
    {
        return view('frontend.account.registration');
    }

    public function registrationForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect(route('login'))->with('success', 'User registered successfully!');
        } 
        return redirect(route('registration'))->with("error", "User not createrd");
    }

    public function login()
    {
        return view('frontend.account.login');
    }

    // Handle the login form submission
    public function loginForm(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            // Authentication passed, redirect to the home page
            return redirect('/')->with('success', 'Logged in successfully!');
        } else {
            // Authentication failed, redirect back with an error
            return back()->with('error', 'Invalid email or password')->withInput();
        }
    }

    // Logout method
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
