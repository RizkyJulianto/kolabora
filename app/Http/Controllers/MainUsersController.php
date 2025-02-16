<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class MainUsersController extends Controller
{
    public function index(Request $request)
    {
        $query = ProjectModel::with('company');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name_project', 'like', "%$search%");
        } else {
            $query->inRandomOrder();
        }

        if ($request->has('search') && empty($request->input('search'))) {
            return redirect()->to('main-users');
        }

        $data = $query->paginate(9);
        $count = ProjectModel::count();
        return view('users/main_users', compact(['data', 'count']));
    }

    public function show($id)
    {
        return view('users/detail/detail_project');
    }
}