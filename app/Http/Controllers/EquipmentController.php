<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipment;

class EquipmentController extends Controller
{
    public function index() {
        $equipments = Equipment::all();
        
        return view('equipment.index', compact('equipments'));
    }
    public function create(Equipment $equipment){
        return view('equipment.create', compact('equipment'));
    }
    public function store(){
        $data = request()->validate([
            'equipment_type' => 'string',
            'equipment_brand' => 'string',
            'model' => 'string',
            'price' => 'integer',
        ]);
        Equipment::create($data);
        return view('equipment.store');
    }
    public function show(Equipment $equipment){

        return view('equipment.show', compact('equipment'));
    }
    public function delete(){
        $equipment = Equipment::withTrashed()->find($id);
        $equipment->restore();

    }
    public function destroy(Equipment $equipment){
        $equipment -> delete();
        return redirect()->route('equipment.index');
    }
}
