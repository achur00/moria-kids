<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Submenu;
// use App\Models\Contact;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Service;

class HomeController extends Controller
{
   public function index()
   {


    $homeIntroList= Page::with(['sections'])->where('name','Home')->first();
    $servicesIntro = Service::where('icon', '!=', null)->get();
    $serviceLowEsteem= Service::with(['section'])->where('short_name', 'Low Self-Esteem ')->first();
     $aboutIntro = Page::where('name', 'home')->first();
  //  dd($serviceLowEsteem->section);
  $menu= Menu::with(['submenu'])->get();
   // dd($menu);

       return view('home')->with('homeIntroList',$homeIntroList)
       ->with('servicesIntro', $servicesIntro)
       ->with('serviceLowEsteem', $serviceLowEsteem)
         ->with('aboutIntro', $aboutIntro)
       ;
   }
}
