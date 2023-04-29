<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = '';
        return view('layouts/components/auth/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:tb_user',
            'username' => ['required', 'min:5', 'max:20', 'unique:tb_user'],
            'password' => 'required|min:8|max:255'
        ]);
        $user = new User([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        return back()->with('success', 'Registration Successfuly!');
    }

    public function login()
    {
        $data['title'] = '';
        return view('layouts.components.auth.login', $data);
    }

    public function login_action(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function password()
    {
        $data['title'] = '';
        return view('layouts/components/auth/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user =User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}