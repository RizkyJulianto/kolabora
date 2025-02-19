<?php

namespace App\Http\Controllers;

use App\Models\RewardsModel;
use Illuminate\Http\Request;

class RewardsController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $data = RewardsModel::with('Rewards')->get();
        $total_point = RewardsModel::where('id_users',$userId)->sum('total_point');
        return view('users/rewards',compact([
            'data',
            'total_point'
        ]));
    }
}