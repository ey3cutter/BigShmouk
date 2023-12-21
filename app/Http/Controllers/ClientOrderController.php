<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Client_order;

use Illuminate\Http\Request;

class ClientOrderController extends Controller
{
    public function index() {
        $co = Client_order::all();
        return view('co.index', compact('co'));
    }
    // public function showCOByUserID($id){
    //     $co = User::findOrFail($id);
    //     $user = 
    //     return view('management.show', compact('user'));
    // }
    public function createCO(User $user){
        $user = User::all();
        $service = Service::all();
        return view('co.create', compact('user', 'service'));
    }
    public function store(){
        $data = request()->validate([
            'user_id' => 'integer',
            'service_id' => 'integer',
            'date_of_order' => 'string',
        ]);
        
        Client_order::create($data);
        
        return view('co.store');
    }
    public function show($id){
        $co = Client_order::findOrFail($id);

        return view('co.show', compact('co'));
    }
    public function edit($id){
        $co = Client_order::findOrFail($id);
        return view('co.edit', compact('co'));
    }
    public function accept(Request $request, $id){
        Client_order::findOrFail($id)->update([
            'user_id' => $request->user_id,
            'service_id' => $request->service_id,
            'date_of_order' => $request->date_of_order,
            'status' => $request->status,
        ]);
        return redirect()->route('co.accept', $id);
    }
}
