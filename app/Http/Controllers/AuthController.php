<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:2|max:255|unique:User',
            'email' => 'required|string|email|max:255|unique:User',
            'password' => 'required|string|min:8|confirmed',
            'name' => 'required|string|min:2|max:255',
            'surname' => 'required|string|min:2|max:255',
            'birthdate' => 'required|date',
            'telephone' => 'required|string|min:9',
            'license_number' => 'required|string|min:3'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'surname' => $request->surname,
            'birthdate' => $request->birthdate,
            'telephone' => $request->telephone,
            'license_number' => $request->license_number,
        ]);

        return redirect()->route('login')->with('success', 'User has been registered succesfully!.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (auth()->attempt(['username' => $request->username, 'email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role === 'admin'){
                return redirect()->route('home_admin')->with('success', 'Login successful');
            }
            return redirect()->route('home')->with('success', 'You are now logged in.');
        }

        return redirect()->back()->withErrors(['email' => 'Inncorrect credencials.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'You are now logged out.');
    }
}
