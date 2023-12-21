<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        
        return view('service.index', compact('services'));
    }
    public function create(Service $service){
        return view('service.create', compact('service'));
    }
    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'price' => 'integer',
        ]);
        Service::create($data);
        return view('service.store');
    }
    public function show(Service $service){

        return view('service.show', compact('service'));
    }
    public function delete(){
        $service = Service::withTrashed()->find($id);
        $service->restore();

    }
    public function destroy(Service $service){
        $service -> delete();
        return redirect()->route('service.index');
    }
}
