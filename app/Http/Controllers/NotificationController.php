<?php

namespace App\Http\Controllers;

use App\Models\NotificationsModel;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $data = NotificationsModel::with('Notification')->get();
        $count = NotificationsModel::where('id_users', $userId)->count();
        return view('users/notification',compact([
            'data',
            'count'
        ]));
    }
}
