<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DataUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $increment = 1;
        $query = User::all();
        $data = $query->whereIn('role', ['users']);
        return view('admin.data_master.users', compact(['data', 'increment']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data_master.add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
            Session::flash('error', 'Invalid created account');
            return redirect('add-users')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $extension = $file->getClientOriginalExtension();
            $nama_file = 'profile_' . time() . '_' . uniqid() . '.' . $extension;
            $tujuan_upload = 'uploads/profile';
            $file->move($tujuan_upload, $nama_file);

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->input('password')),
                'email' => $request->email,
                'born_birth' => $request->born_birth,
                'date_birth' => $request->date_birth,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'bio' => $request->bio,
                'role' => 'users',
                'profile_img' => $nama_file ?? 'default-profile.jpg',
                'status' => 1,
            ]);
        } else {
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->input('password')),
                'email' => $request->email,
                'born_birth' => $request->born_birth,
                'date_birth' => $request->date_birth,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'bio' => $request->bio,
                'role' => 'users',
                'profile_img' => $nama_file ?? 'default-profile.jpg',
                'status' => 1,
            ]);
        }

        Session::flash('success_second', 'Data users added succcessfully');
        return redirect()->to('data-users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.data_master.show_user', compact(['users']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.data_master.edit_user', compact(['users']));
    }

    /**
     * Update the specified resource in storage.
     */
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
            Session::flash('error', 'Invalid created account');
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
                'born_birth' => $request->born_birth,
                'date_birth' => $request->date_birth,
                'no_telp' => $request->no_telp,
                'gender' => $request->gender,
                'address' => $request->address,
                'last_education' => $request->last_education,
                'bio' => $request->bio,
                'profile_img' => $nama_file,
                'status' => $request->status,
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
                'status' => $request->status,
            ]);
        }

        Session::flash('success_second', 'Data users updated succcessfully');
        return redirect()->to('data-users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        Session::flash('success_second', 'Data users deleted succcessfully');
        return redirect()->to('data-users');
    }
}