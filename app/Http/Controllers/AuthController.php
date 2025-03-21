<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required'
        ]);

        if ($validator->fails()) {
            return redirect('auth/login')->withErrors($validator)->withInput();
        }

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user && $user->status == 1) {
                if ($user->role === 'users') {
                    Session::flash('success', 'Login success');
                    return redirect('/main-users');
                } elseif ($user->role === 'company') {
                    Session::flash('success', 'Login success');
                    return redirect('/main-company');
                } elseif ($user->role === 'admin') {
                    Session::flash('success', 'Login success');
                    return redirect('/main-admin');
                }
            } else {
                Session::flash('error', 'Your account is not active');
                return redirect('auth/login');
            }
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|min:8|same:password',
            'role' => 'required'
        ], [
            'name.required' => 'Name is required',
            'username.required' => 'Username is required',
            'username.unique' => 'This username is already taken',
            'email.required' => 'Email is required',
            'email.unique' => 'This email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password min 8 characters',
            'role.required' => 'Role is required',
        ]);

        if ($validator->fails()) {
            return redirect('auth/registrasi')->withErrors($validator)->withInput();
        }

        $users = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
            'profile_img' => 'default-profile.jpg',
            'status' => 1
        ]);

        if ($users) {
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
        Session::flush();
        Session::flash('success', 'Logout successfully');
        return redirect('auth/login');
    }
}