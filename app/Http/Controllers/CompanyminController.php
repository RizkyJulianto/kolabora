<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyminController extends Controller
{
    public function index()
    {
        return view('companymin/main_company');
    }
    public function jobs()
    {
        return view('companymin/jobs');
    }
    public function verify(){
        return view('companymin/verify');
    }
    public function result(){
        return view('companymin/results');
    }
    public function notif(){
        return view('companymin/notification');
    }
    public function settings(){
        return view('companymin/settings');
    }

}
