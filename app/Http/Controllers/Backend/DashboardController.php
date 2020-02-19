<?php

namespace App\Http\Controllers\Backend;

use App\user;

class DashboardController extends Controller
{
    public function index(User $user)
    {
    	return view('dashboard', [
    		'users' => $user->take(5)->get()
    	]);
    }
}
