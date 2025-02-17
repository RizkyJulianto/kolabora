<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = ProjectModel::with(['company']);
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name_project', 'like', "%$search%");
        } else {
            $query->inRandomOrder();
        }

        if ($request->has('search') && empty($request->input('search'))) {
            return redirect()->to('project');
        }

        $data = $query->paginate(9);
        $count = ProjectModel::count();
        return view('users/project', compact(['data', 'count']));
    }
}