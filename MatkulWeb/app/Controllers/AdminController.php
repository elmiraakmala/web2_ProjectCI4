<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('Admin/index');
    }

    public function about()
    {
        return view('Admin/about');
    }
    public function contact()
    {
        return view('Admin/contact');
    }
}
