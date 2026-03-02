<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $colocation = Auth::user()->colocations()->first();

        return view('dashboard', compact('colocation'));
    }
}