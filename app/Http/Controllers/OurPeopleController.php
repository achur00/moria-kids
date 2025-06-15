<?php

namespace App\Http\Controllers;
use App\Models\Submenu;
use App\Models\Section;
// use App\Models\Menu;
use Illuminate\Http\Request;

class OurPeopleController extends Controller
{
    public function index(){

        $profile=Section::with(['Submenus'])->where('type','Profile')->get();
        $services=Submenu::where('menu_id',3)->get();
       $ourPeople=Submenu::where('name','Our People')->first();
        return view('team')->with('sections',$profile)
        ->with('ourPeople',$ourPeople)
        // ->with('menus', Menu::with(['Submenus'])->get())
        ->with('services', $services)
        ;
    }
}
