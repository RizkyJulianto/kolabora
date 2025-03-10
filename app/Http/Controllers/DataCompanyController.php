<?php

namespace App\Http\Controllers;

use App\Models\CompanyUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DataCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $increment = 1;
        $data = CompanyUsers::with(['users'])->get();
        return view('admin.data_master.company', compact(['data', 'increment']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $query = User::all();
        $data = $query->whereIn('role', ['company']);
        return view('admin.data_master.add_company', compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_company' => 'required|string|max:255',
            'id_users' => 'required',
            'profile_img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Name company is required',
            'id_users.required' => 'Email user or name users is required',
            'profile_img.mimes' => 'Format image use jpg, jpeg, png',
            'profile_img.image' => 'Your upload is not image',
        ]);

        if ($validator->fails()) {
            Session::flash('error', 'Invalid created company');
            return redirect('add-company')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_company')) {
            $file = $request->file('profile_company');
            $extension = $file->getClientOriginalExtension();
            $nama_file = 'profile_company' . time() . '_' . uniqid() . '.' . $extension;
            $tujuan_upload = 'uploads/profile_company';
            $file->move($tujuan_upload, $nama_file);

            CompanyUsers::create([
                'name_company' => $request->name_company,
                'about_company' => $request->about_company,
                'address_company' => $request->address_company,
                'slogan' => $request->slogan,
                'scope_company' => $request->scope_company,
                'contact' => $request->contact,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'website' => $request->website,
                'profile_company' => $request->profile_company ?? 'default-profile-company.jpg',
                'id_users' => $request->id_users,
            ]);
        } else {
            CompanyUsers::create([
                'name_company' => $request->name_company,
                'about_company' => $request->about_company,
                'address_company' => $request->address_company,
                'slogan' => $request->slogan,
                'scope_company' => $request->scope_company,
                'contact' => $request->contact,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'website' => $request->website,
                'profile_company' => $request->profile_company ?? 'default-profile-company.jpg',
                'id_users' => $request->id_users,
            ]);
        }

        Session::flash('success_second', 'Data company added succcessfully');
        return redirect()->to('data-company');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = CompanyUsers::with(['users'])->findOrFail($id);
        return view('admin.data_master.show_company', compact(['company']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $query = User::all();
        $data = $query->whereIn('role', ['company']);
        $company = CompanyUsers::findOrFail($id);
        return view('admin.data_master.edit_company', compact(['company', 'data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = CompanyUsers::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name_company' => 'required|string|max:255',
            'id_users' => 'required',
            'profile_img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Name company is required',
            'id_users.required' => 'Email user or name users is required',
            'profile_img.mimes' => 'Format image use jpg, jpeg, png',
            'profile_img.image' => 'Your upload is not image',
        ]);

        if ($validator->fails()) {
            Session::flash('error', 'Invalid updated company');
            return redirect('edit-company')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_company')) {
            $file = $request->file('profile_company');
            $extension = $file->getClientOriginalExtension();
            $nama_file = 'profile_company' . time() . '_' . uniqid() . '.' . $extension;
            $tujuan_upload = 'uploads/profile_company';
            $file->move($tujuan_upload, $nama_file);

            $company->update([
                'name_company' => $request->name_company,
                'about_company' => $request->about_company,
                'address_company' => $request->address_company,
                'slogan' => $request->slogan,
                'scope_company' => $request->scope_company,
                'contact' => $request->contact,
                'email' => $request->email,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'website' => $request->website,
                'profile_company' => $request->profile_company ?? 'default-profile-company.jpg',
                'id_users' => $request->id_users,
            ]);
        } else {
            $company->update([
                'name_company' => $request->name_company,
                'about_company' => $request->about_company,
                'address_company' => $request->address_company,
                'slogan' => $request->slogan,
                'scope_company' => $request->scope_company,
                'contact' => $request->contact,
                'email' => $request->email,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'website' => $request->website,
                'profile_company' => $request->profile_company ?? 'default-profile-company.jpg',
                'id_users' => $request->id_users,
            ]);
        }

        Session::flash('success_second', 'Data company updated succcessfully');
        return redirect()->to('data-company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = CompanyUsers::findOrFail($id);
        $company->delete();
        Session::flash('success_second', 'Data company deleted succcessfully');
        return redirect()->to('data-company');
    }
}