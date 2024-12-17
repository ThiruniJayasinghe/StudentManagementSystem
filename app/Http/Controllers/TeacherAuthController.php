<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TeacherAuthController extends Controller
{
    // Show Sign Up Form
    public function showSignUpForm()
    {
        return view('teacher.signup');
    }

    // Handle Sign Up
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create User
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'teacher',
        ]);

        return redirect()->route('teacher.login')->with('success', 'Account created successfully. Please log in.');
    }

    // Show Login Form
    public function showLoginForm()
    {
        return view('teacher.login');
    }

    // Handle Login
    public function login(Request $request)
{
    // Validate the credentials
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
        // Check if the authenticated user has the 'teacher' role
        if (Auth::user()->role === 'teacher') {
            return redirect('/welcome1')->with('success', 'Logged in successfully.');
        }

        // Log out if role is not 'teacher'
        Auth::logout();
        return back()->withErrors(['email' => 'Access denied. You are not a teacher.']);
    }

    // If authentication fails
    return back()->withErrors(['email' => 'Invalid credentials or account not found.']);
}

}
