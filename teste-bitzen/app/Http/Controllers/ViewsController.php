<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('templete.views.index');
    }
    
    public function signin($message = "")
    {
        return view('templete.views.login', compact('message'));
    }

    public function dashboard($message = "")
    {
        return view('templete.views.auth.dashboard', compact('message'));
    }
}
