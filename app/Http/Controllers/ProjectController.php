<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

        $data = $query->whereIn('status', ['Pending', 'Accepted', 'Rejected'])->paginate(9);
        $count = ProjectModel::whereIn('status', ['Pending', 'Accepted', 'Rejected'])->count();
        return view('users/project', compact(['data', 'count']));
    }

    public function show($id)
    {
        $data = ProjectModel::with(['company'])->findOrFail($id);
        return view('users/detail/detail_project_result', compact('data'));
    }

    public function result(Request $request, $id)
    {
        $data = ProjectModel::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'result_project' => 'required',
            'description_result' => 'required'
        ], [
            'result_project.required' => 'Result project is required',
            'description_result.required' => 'Description result is required'
        ]);

        if ($validator->fails()) {
            return redirect('project/' . $id)->withErrors($validator)->withInput();
        }

        $data->update([
            'result_project' => $request->result_project,
            'description_result' => $request->description_result,
            'status_result' => 1,
            'date_result' => now(),
        ]);

        Session::flash('success_second', 'Hasil project telah dikirimkan');
        return redirect()->to('project');
    }
}