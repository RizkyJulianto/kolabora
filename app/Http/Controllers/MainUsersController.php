<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $count = ProjectModel::where('status', 'Found')->get()->count();
        return view('users/main_users', compact(['data', 'count']));
    }

    public function show($id)
    {
        $data = ProjectModel::with(['company'])->findOrFail($id);
        return view('users/detail/detail_project', compact('data'));
    }

    public function join(Request $request, $id)
    {
        $data = ProjectModel::findOrFail($id);
        $data->update([
            'status' => 'Pending',
            'id_users' => $request->id_users,
        ]);

        Session::flash('success_second', 'Project telah di join, Tunggu verifikasi project');
        return redirect()->to('main-users');
    }
}