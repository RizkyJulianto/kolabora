<?php

namespace App\Http\Controllers;

use App\Models\CompanyUsers;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(request $request)
    {
        $query = CompanyUsers::with('project');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name_company', 'like', "%$search%")
                ->orWhere('address_company', 'like', "%$search%")
                ->orWhere('scope_company', 'like', "%$search%");
        } else {
            $query->inRandomOrder();
        }

        if ($request->has('search') && empty($request->input('search'))) {
            return redirect()->to('company');
        }

        $data = $query->paginate(9);
        $count = CompanyUsers::count();
        return view('users/company', compact(['data', 'count']));
    }

    public function show($id)
    {
        $data = CompanyUsers::with('project')->findOrFail($id);
        return view('users/detail/detail_company', compact('data'));
    }
}