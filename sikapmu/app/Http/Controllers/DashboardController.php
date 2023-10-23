<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role === 'Admin') {
            // Perform actions for admin role
            return view('Admin.dashboard');
        } elseif ($user->role === 'wm') {
            // Perform actions for user role
            return view('Wiramuda.dashboard');
        }elseif ($user->role === 'u') {
            // Perform actions for user role
            return view('Wiramuda.dashboard');
        } 
        else {
            // Handle other roles or cases
            return view('dashboard');
        }
    }
}
