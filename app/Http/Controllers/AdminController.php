<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        $films = Film::all();
        $users= User::all();
        return view('admin.dashboard', compact('films', 'users'));
    }
}
