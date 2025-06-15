<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Submenu;
// use App\Models\Contact;
// use App\Models\Menu;
use App\Models\Page;
use App\Models\Service;

class HomeController extends Controller
{
   public function index()
   {
   //  $services = Submenu::where('menu_id', '3')->get();
   //  // dd($services);
   //  $products=Submenu::all();
   //  // dd($products);
   //  $contact=Contact::first();
    // $about1 = Submenu::where('name', 'About Us')->first();
    // $services = Submenu::where('menu_id','3')->get();
    // $service = Menu::with(['Submenus'])->where('id','3')->first();
    // dd($service);
    $homeIntroList= Page::with(['Sections'])->where('name','Home')->first();
    $servicesIntro = Service::where('icon', '!=', null)->get();
    $serviceLowEsteem= Service::where('short_name', 'Low Self-Esteem ')->first();


       return view('home')->with('homeIntroList',$homeIntroList)
       ->with('servicesIntro', $servicesIntro)
       ->with('serviceLowEsteem', $serviceLowEsteem)
       ;
   }
}
