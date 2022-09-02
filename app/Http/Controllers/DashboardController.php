<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function admin()
    {
        return view('adminhome', [
            'title' => 'Admin dashboard',
        ]);
    }

    public function user()
    {
        return view('userhome', [
            'title' => 'User Dashboard',
        ]);
    }

}
