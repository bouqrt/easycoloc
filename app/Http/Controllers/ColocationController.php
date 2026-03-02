<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use Illuminate\Http\Request;

class ColocationController extends Controller
{
    public function create()
    {
        return view('colocations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $colocation = Colocation::create([
            'name' => $request->name,
            'owner_id' => auth()->id(),
            'status' => 'active',
        ]);

        // 🔥 ربط owner بالـ pivot table
        $colocation->users()->attach(auth()->id(), [
            'role' => 'owner'
        ]);

        return redirect()->route('dashboard');
    }
}