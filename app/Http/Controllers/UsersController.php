<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function index()
    {
        return view('users/main_users');
    }

    public function show($id)
    {
        $profile = User::findOrFail($id);
        return view('users.profile', compact('profile'));
    }
}
