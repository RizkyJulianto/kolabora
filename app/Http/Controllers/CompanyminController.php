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

}
