<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function index()
    {
        return view('service');
    }

    public function show($id)
    {
        $service = Section::find($id);
        return view('service.show')->with('service', $service);
    }
}
