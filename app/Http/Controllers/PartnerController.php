<?php

namespace App\Http\Controllers;

use App\Models\PartnerModel;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $query = PartnerModel::query();
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name_team', 'like', "%$search%")
                ->orWhere('location_team', 'like', "%$search%")
                ->orWhere('total_member', 'like', "%$search%");
        } else {
            $query->inRandomOrder();
        }

        if ($request->has('search') && empty($request->input('search'))) {
            return redirect()->to('partner');
        }

        $data = $query->paginate(9);
        $count = PartnerModel::count();
        return view('users/partner', compact(['data', 'count']));
    }
}
