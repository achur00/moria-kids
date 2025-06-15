<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;

class AboutController extends Controller
{
    public function index()
    {
        $about = Submenu::where('name', 'About Us')->first();
        $about1 = Submenu::where('name', 'About Us')->first();
        // $about = Submenu::where('name', 'About Us')->first();

        // dd(request()->path());
        return view('about')->with('about', $about)->with('about1', $about1);
    }
}

