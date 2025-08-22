<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;


class AboutController extends Controller
{
    public function index()
    {
      
        $page = Page::where('name', 'About')->first();
        // dd($page);
        return view('about')->with('page', $page);
    }
}

