<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ManagementController extends Controller
{
    public function index() {
        $user = User::all();
        return view('management.index', compact('user'));
    }
    public function show($id){
        $user = User::findOrFail($id);
        
        return view('management.show', compact('user'));
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('management.edit', compact('user'));
    }
    public function hire(Request $request, $id){
        User::findOrFail($id)->update([
            'name_surname' => $request->name_surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);
        return redirect()->route('management.hire', $id);
    }
}
