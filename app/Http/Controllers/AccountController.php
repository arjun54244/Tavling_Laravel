<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // This method will show user registration page
    public function registration(){
        return view('frontend.account.registration');
    }
    public function registrationForm(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if( $user->save()){
            return redirect('/')->with('success', 'User inserted successfully');
        }
    }
    public function login(){
        return view('frontend.account.login');
    }
}
