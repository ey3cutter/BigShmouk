<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Equipment;
use App\Models\Equipment_order;

class EquipmentOrderController extends Controller
{
    public function index() {
        $eo = Equipment_order::all();
        return view('eo.index', compact('eo'));
    }
    public function createEO(User $user, Equipment $equipment){
        $user = User::all();
        $equipment = Equipment::all();
        return view('eo.create', compact('user', 'equipment'));
    }
    public function store(){
        $data = request()->validate([
            'user_id' => 'integer',
            'equipment_id' => 'integer',
            'date_of_order' => 'string',
        ]);
        
       
        Equipment_order::create($data);
        
        return view('eo.store');
    }
    public function show($id){
        $eo = Equipment_order::findOrFail($id);

        return view('eo.show', compact('eo'));
    }
}
