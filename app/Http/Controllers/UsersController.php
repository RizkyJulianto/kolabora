<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|max:255|email',
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|min:8|same:password',
            'profile_img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Name is required',
            'username.required' => 'Username is required',
            'username.unique' => 'This username is already taken',
            'email.required' => 'Email is required',
            'email.unique' => 'This email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password min 8 characters',
            'profile_img.mimes' => 'Format image use jpg, jpeg, png',
            'profile_img.image' => 'Your upload is not image',
        ]);

        if ($validator->fails()) {
            Session::flash('error', 'Invalid created account');
            return redirect('profile/' . $id)->withErrors($validator)->withInput();
        }

        if ($request->has('reset_profile_img') && $request->reset_profile_img == 1) {
            $users->profile_img = 'default-profile.jpg';
            $users->save();
            Session::flash('success_second', 'Foto profile berhasil direset');
            return redirect()->to('profile/' . $id);
        }

        if ($request->has('password') && $request->filled('password')) {
            $users->update([
                'password' => Hash::make($request->password),
            ]);
            Session::flash('success_second', 'Password telah diubah');
            return redirect()->to('profile/' . $id);
        }

        if ($request->hasFile('profile_img')) {
            if ($users->profile_img && $users->profile_img !== 'default-profile.jpg') {
                Storage::delete('public/uploads/profile/' . $users->profile_img);
            }

            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $nama_file = 'profile_' . time() . '_' . uniqid() . '.' . $extension;
            $tujuan_upload = 'uploads/profile';
            $file->move($tujuan_upload, $nama_file);

            $users->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->filled('password') ? Hash::make($request->password) : $users->password,
                'email' => $request->email,
                'born_birth' => $request->born_birth,
                'date_birth' => $request->date_birth,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'bio' => $request->bio,
                'profile_img' => $nama_file,
            ]);
        } else {
            $users->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->filled('password') ? Hash::make($request->password) : $users->password,
                'email' => $request->email,
                'born_birth' => $request->born_birth,
                'date_birth' => $request->date_birth,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'bio' => $request->bio,
            ]);
        }

        Session::flash('success_second', 'Data users updated succcessfully');
        return redirect()->to('/profile-users/' . $id);
    }
}