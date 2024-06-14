<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view("page.auth.login");
    }
    function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ], [
            "email.required" => "Email harus diisi",
            "password.required" => "Password harus diisi",
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            return redirect('dashboard');
        } else {
            return redirect('')->withErrors('username dan password yang dimasukan tidak sesui')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
