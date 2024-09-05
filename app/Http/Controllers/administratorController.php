<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administratorController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
