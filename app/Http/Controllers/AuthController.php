<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Username is required',
            'password.required' => 'Password is required'
        ]);

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('/');
        } else {
            Session::flash('error', 'Username or password incorrect');
            return redirect('auth/login');
        }
    }

    public function registrasi()
    {
        return view('auth/registrasi');
    }

    public function processRegistrasi(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:8'
        ],[
            'name.required' => 'Name is required',
            'username.required' => 'Username is required',
            'username.unique' => 'This username is already taken',
            'email.required' => 'Email is required',
            'email.unique' => 'This email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password min 8 characters',
        ]);

        $users = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'registrant'
        ]);

        if($users) {
            Auth::login($users);
            Session::flash('success', 'Create an account successfully');
            return redirect('auth/login');
        } else {
            Session::flash('error', 'Invalid created account');
            return redirect('auth/registrasi');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth/login');
    }
}

