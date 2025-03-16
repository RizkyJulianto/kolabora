<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainUsersController extends Controller
{
    public function index(Request $request)
    {
        $query = ProjectModel::with('company')->whereIn('status', ['Found'])->orWhereNull('status');
        $count = $query->count();

        if ($request->has('search')) {
            $search = trim($request->input('search'));
            if (!empty($search)) {
                $query->where('name_project', 'like', "%$search%");
            } else {
                return redirect()->to('main-users');
            }
        } else {
            $query->inRandomOrder();
        }

        $data = $query->paginate(9);
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