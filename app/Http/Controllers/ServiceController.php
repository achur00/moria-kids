<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Section;
// use App\Models\Submenu;
// use App\Models\Menu;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services= Service::all();
        return view('services', compact('services'));
    }

    public function show($id)
    {
        // $service = Service::with(['section'])->find($id);
        $service = Service::with(['section'])->findOrFail($id);


        return view('service_details', compact('service'));
        
    }
    // public function create()
    // {
    //     return view('service.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //     ]);

    //     $service = new Service();
    //     $service->name = $request->name;
    //     $service->description = $request->description;
    //     $service->price = $request->price;
    //     $service->save();

    //     return redirect()->route('service.index');
    // }

    // public function edit($id)
    // {
    //     $service = Service::find($id);
    //     return view('service.edit')->with('service', $service);
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //     ]);

    //     $service = Service::find($id);
    //     $service->name = $request->name;
    //     $service->description = $request->description;
    //     $service->price = $request->price;
    //     $service->save();

    //     return redirect()->route('service.index');
    // }

    // public function destroy($id)
    // {
    //     $service = Service::find($id);
    //     $service->delete();

    //     return redirect()->route('service.index');
    // }



    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $services = Service::where('name', 'like', '%' . $search . '%')->get();
    //     return view('service.index')->with('services', $services);
    // }

    // public function searchPrice(Request $request)
    // {
    //     $price = $request->price;
    //     $services = Service::where('price', 'like', '%' . $price . '%')->get();
    //     return view('service.index')->with('services', $services);
    // }


}
