<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credentials)){

            return redirect('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
            'retype_password' => 'required|min:6'
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $row = User::where('name', $name)->first();

        if ($request->password != $request->retype_password){
            return back()->withErrors([
                'retype_password' => 'Retype password must be the same.',
            ])->onlyInput('retype_password');
        }

        if($row){
            return back()->withErrors([
                'name' => 'The user is already exists.',
            ])->onlyInput('name');
        }

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect()->route('login');
    }

    public function logout(Request $request) : RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
