<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MainAdminController extends Controller
{
    public function index()
    {
        return view('admin/main');
    }

    public function profile(string $id)
    {
        $data = User::findOrFail($id);
        return view('admin.profile', compact(['data']));
    }

    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|max:255|email',
            'password' => 'nullable|min:8',
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
            Session::flash('error', 'Invalid updated account');
            return redirect('add-users')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_img')) {
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
                'gender' => $request->gender,
                'address' => $request->address,
                'profile_img' => $nama_file,
                'status' => $request->status,
            ]);
        } else {
            $users->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->filled('password') ? Hash::make($request->password) : $users->password,
                'email' => $request->email,
                'gender' => $request->gender,
                'address' => $request->address,
                'status' => $request->status,
            ]);
        }

        Session::flash('success_second', 'Data admin updated succcessfully');
        return redirect()->to('profile');
    }
}