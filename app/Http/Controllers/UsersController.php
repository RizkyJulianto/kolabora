<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

        $validator = Validator::make($request->all(),[
            'profile_img' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'profile_img.mimes' => 'Format image use jpg, jpeg, png',
            'profile_img.image' => 'Your upload is not image',
        ]);

        if ($validator->fails())
        {
            Session::flash('error', 'Invalid created account');
            return redirect('profile/'.$id)->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $nama_file = time()."_profile_".$file->getClientOriginalName();
            $tujuan_upload = 'uploads/profile';
            $file->move($tujuan_upload, $nama_file);

            $users->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->has('password') ? Hash::make($request->password) : $users->password,
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
                'password' => $request->has('password') ? Hash::make($request->password) : $users->password,
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
        return redirect()->to('profile/'.$id);
    }

}