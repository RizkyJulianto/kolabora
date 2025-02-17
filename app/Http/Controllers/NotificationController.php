<?php

namespace App\Http\Controllers;

use App\Models\NotificationsModel;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $data = NotificationsModel::with('Notification')->get();
        $count = NotificationsModel::count();
        return view('users/notification',compact([
            'data',
            'count'
        ]));
    }
}
