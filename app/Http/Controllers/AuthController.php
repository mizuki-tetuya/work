<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function getResister()
    {
        return view('resister');
    }

    public function postResister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return view('login');
    }

    public function getLogin()
    {
        return view("login");
    }

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email, 'password'=>$password])) {
            return view('date');
        } else {
            return back();
        }
    }

    public function postLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
