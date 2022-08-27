<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function selectRole(Request $request)
    {
        Session::put('role',$request->role);
        return redirect()->route('register');
    }

    public function registerUser(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validatedData) {
            User::create([
                'name' => $request['first_name'].' '.$request['last_name'],
                'role' => $request['role'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->route('login')->with('message', 'Please verify your email to proceed!');
        }
    }
}
